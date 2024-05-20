<?php

namespace Sniper\EfrisLib;

use JsonException;
use PhpParser\Node\Scalar\String_;
use Sniper\EfrisLib\Invoicing\CreditNote\CancelNote;
use Sniper\EfrisLib\Invoicing\CreditNote\CreditNote;
use Sniper\EfrisLib\Invoicing\CreditNote\CreditNoteQuery;
use Sniper\EfrisLib\Invoicing\Invoice;
use Sniper\EfrisLib\Invoicing\InvoiceQuery;
use Sniper\EfrisLib\Misc\Enums\TaxpayerType;
use Sniper\EfrisLib\Misc\Normalizers\TaxpayerTypeNormalizer;
use Sniper\EfrisLib\Misc\SerializerFactory;
use Sniper\EfrisLib\Misc\TaxpayerInfo;
use Sniper\EfrisLib\Payload\Data;
use Sniper\EfrisLib\Payload\GlobalInfo;
use Sniper\EfrisLib\Payload\Payload;
use Sniper\EfrisLib\Product\GoodsStockMaintain;
use Sniper\EfrisLib\Product\Product;
use Sniper\EfrisLib\Product\ProductQuery;
use Sniper\EfrisLib\Product\ProductUpload;
use Sniper\EfrisLib\Response\Invoice\CreditNote\CreditNoteResponse;
use Sniper\EfrisLib\Response\Invoice\InvoiceResponse;
use Sniper\EfrisLib\Response\ProductQueryResponse;
use Sniper\EfrisLib\Response\Response;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use function PHPUnit\Framework\isEmpty;

class EFRISService
{
    public string $tin;
    public string $deviceNo;
    public ?string $timeZone;
    public function __construct(protected Serializer $serializer)
    {
    }

    /**
     * @param mixed $content
     * @param string $interfaceCode
     * @return Response|bool
     */
    public function send(mixed $content, string $interfaceCode, $type, bool $encrypt = true): Response|bool
    {
        $aesKey = null;
        $data = new Data();
        if (!is_null($content)) {
            $data->content = self::json_serialize($content);
        }
        if ($encrypt) {
            $aesKey = self::getAESKey();
            $data->encrypt($aesKey);
        }
        if (!empty($data->content)) {
            $data->sign();
        }
        return self::post($interfaceCode, $data, $type, $aesKey);
    }

    /**
     * @return bool|string
     */
    private function getAESKey(): bool|string
    {
        $aesKey = null;
        $data = new Data(content: "");
        return $this->post("T104", $data, "string", $aesKey)->data;
    }

    /**
     * @param string $json
     * @param string $type
     * @return mixed
     */
    private function json_deserialize(string $json, string $type): mixed
    {
        if ($type == "array")
            return $this->serializer->deserialize($json, $type,'json');
        return $this->serializer->deserialize($json, $type, 'json',
            [AbstractObjectNormalizer::SKIP_NULL_VALUES, AbstractObjectNormalizer::SKIP_UNINITIALIZED_VALUES]);
    }

    private function json_serialize(mixed $data): string
    {
        return $this->serializer->serialize($data, 'json');
    }

    /**
     * @param ProductUpload $productUpload
     * @return Response
     */
    public function configureProduct(ProductUpload $productUpload): Response
    {
        return $this->send($productUpload->products, "T130", "array", true);
    }

    public function queryProduct(string $pageSize = "10", string $pageNo = "1", $goodName = "", $goodsCode = ""): Response
    {
        $query = new ProductQuery(pageNo: $pageNo, pageSize: $pageSize);
        return $this->send($query, "T127", ProductQueryResponse::class, true);
    }

    /**
     * @param GoodsStockMaintain $goodsStockMaintain
     * @return Response
     */
    public function manageStock(GoodsStockMaintain $goodsStockMaintain): Response
    {
        return $this->send($goodsStockMaintain, "T131", "array", true);
    }

    public function fiscalizeInvoice(Invoice $invoice): Response
    {
        return $this->send($invoice, "T109", InvoiceResponse::class, true);
    }


    public function retrieveInvoice(string $invoiceNo): Response
    {
        $query = array("invoiceNo" => $invoiceNo);
        return $this->send($query, "T108", InvoiceResponse::class, true);
    }

    public function queryInvoice(InvoiceQuery $invoiceQuery): Response
    {
        return $this->send($invoiceQuery, "T106", ProductQueryResponse::class, true);
    }

    public function issueCreditNote(CreditNote $creditNote): Response
    {
        return $this->send($creditNote, "T110", CreditNoteResponse::class, true);
    }

    public function queryCreditNote(CreditNoteQuery $creditNoteQuery): Response
    {
        return $this->send($creditNoteQuery, "T111", 'array');
    }

    public function retrieveCreditNote(string $id): Response
    {
        return $this->send(array("id" => $id), "T112", 'array');
    }

    public function cancelCreditNote(CancelNote $cancelNote): Response
    {
        return $this->send($cancelNote, "T114", "array", true);
    }

    public function tinInfo(string $tin): Response
    {
        $query = array();
        $query['tin'] = $tin;
        return $this->send($query, "T119", TaxpayerInfo::class, true);
    }


    /**
     * @param Payload $payload
     * @param $type
     * @param $aesKey
     * @return Response
     */
    private function extractResponse(Payload $payload, $type, $aesKey): Response
    {
        $response = Response::builder()->returnStateInfo($payload->returnStateInfo);
        var_dump($payload);
//        check encryption stata
        $isEncrypted = $payload->data->dataDescription->codeType == "1";
        $encryptCode = $payload->data->dataDescription->encryptCode;
        if ($isEncrypted and $encryptCode == "2") {
            if ($aesKey == null)
                $aesKey = self::getAESKey();
            $payload->data->decrypt($aesKey);
        } else {
            $jsonContent = base64_decode($payload->data->content);
            if ($payload->globalInfo->interfaceCode == "T104") {
                $passowrdDes = base64_decode(json_decode($jsonContent)->passowrdDes);
                $response->data(base64_decode(Crypto::rsaDecrypt($passowrdDes)));
            } else {
                $response->data(self::json_deserialize($jsonContent, 'array'));
            }
            return $response;
        }
        if (gettype($payload->data->content) == "string" and empty($payload->data->content))
            $response->data($payload->data->content);
        else
            $response->data(EFRISService::json_deserialize($payload->data->content, $type));

        return $response;
    }

    /**
     * @param string $interfaceCode
     * @param Data $data
     * @param $type
     * @param bool|string|null $aesKey
     * @return false|Response
     */
    public function post(string $interfaceCode, Data $data, $type, bool|string|null $aesKey): false|Response
    {

        $globalInfo = new GlobalInfo($this->tin, $this->deviceNo, $interfaceCode);
        $payload = new Payload(globalInfo: $globalInfo, data: $data); //::build()->data($data)->globalInfo($globalInfo);

        $curl = curl_init("https://efrisws.ura.go.ug/ws/taapp/getInformation");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->json_serialize($payload));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);
        if ($response) {
            $payload = self::json_deserialize($response, Payload::class);
            // self::json_deserialize($response, Payload::class);
            return self::extractResponse($payload, $type, $aesKey);
        }
        return false;
    }


    /**
     * @throws JsonException
     */
    private static function customJsonEncode($data): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR);
    }

    /**
     * @throws JsonException
     */
    private static function customJsonDecode(string $json): mixed
    {
        $decoded = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        if (isset($decoded['taxpayerType'])) {
            $decoded['taxpayerType'] = TaxpayerType::fromJson($decoded['taxpayerType']);
        }
        return $decoded;
    }

}
