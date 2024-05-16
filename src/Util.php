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

class Util
{
    public static string $timeZone;
    public static string $tin;
    public static string $deviceNo;

    /**
     * @param mixed $content
     * @param string $interfaceCode
     * @return Response|bool
     */
    public static function send(mixed $content, string $interfaceCode, $type, bool $encrypt = true): Response|bool
    {
        $aesKey = null;
        $data = new Data(content: $content);
        if (!is_null($content)) {
            $data->content(self::json_serialize($content));
        }
        if ($encrypt) {
            $aesKey = self::getAESKey();
            $data->encrypt($aesKey);
        }
        if (!isEmpty($data->content)) {
            $data->sign();
        }
        return self::post($interfaceCode, $data, $type, $aesKey);
    }

    /**
     * @return bool|string
     */
    private static function getAESKey(): bool|string
    {
        $aesKey = null;
        $data = new Data(content: "");
        return self::post("T104", $data, "string", $aesKey);
    }

    /**
     * @param string $json
     * @param string $type
     * @return mixed
     */
    public static function json_deserialize(string $json, string $type): mixed
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer(null, null, null, new ReflectionExtractor()), new TaxpayerTypeNormalizer(), new ArrayDenormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        if ($type == "array")
            return $serializer->decode($json, 'json');
        return $serializer->deserialize($json, $type, 'json',
            [AbstractObjectNormalizer::SKIP_NULL_VALUES, AbstractObjectNormalizer::SKIP_UNINITIALIZED_VALUES]);
    }

    public static function json_serialize(mixed $data): string
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer(null, null, null, new ReflectionExtractor()), new TaxpayerTypeNormalizer(), new ArrayDenormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        return $serializer->serialize($data, 'json');
    }

    /**
     * @param ProductUpload $productUpload
     * @return Response
     */
    public static function configureProduct(ProductUpload $productUpload): Response
    {
        return Util::send($productUpload->products, "T130", "array", true);
    }

    public static function queryProduct(string $pageSize = "10", string $pageNo = "1", $goodName = "", $goodsCode = ""): Response
    {
        $query = ProductQuery::build()->pageSize($pageSize)->pageNo($pageNo)->goodsName($goodName)->goodsCode($goodsCode);
        return Util::send($query, "T127", ProductQueryResponse::class, true);
    }

    /**
     * @param GoodsStockMaintain $goodsStockMaintain
     * @return Response
     */
    public static function manageStock(GoodsStockMaintain $goodsStockMaintain): Response
    {
        return self::send($goodsStockMaintain, "T131", "array", true);
    }

    public static function fiscalizeInvoice(Invoice $invoice): Response
    {
        return Util::send($invoice, "T109", InvoiceResponse::class, true);
    }


    public static function retrieveInvoice(string $invoiceNo): Response
    {
        $query = array("invoiceNo" => $invoiceNo);
        return self::send($query, "T108", InvoiceResponse::class, true);
    }

    public static function queryInvoice(InvoiceQuery $invoiceQuery): Response
    {
        return self::send($invoiceQuery, "106", 'array', true);
    }

    public static function issueCreditNote(CreditNote $creditNote): Response
    {
        return Util::send($creditNote, "T110", CreditNoteResponse::class, true);
    }

    public static function queryCreditNote(CreditNoteQuery $creditNoteQuery): Response
    {
        return self::send($creditNoteQuery, "T111", 'array');
    }

    public static function retrieveCreditNote(string $id): Response
    {
        return self::send(array("id" => $id), "T112", 'array');
    }

    public static function cancelCreditNote(CancelNote $cancelNote): Response
    {
        return Util::send($cancelNote, "T114", "array", true);
    }

    public static function tinInfo(string $tin): Response
    {
        $query = array();
        $query['tin'] = $tin;
        return Util::send($query, "T119", TaxpayerInfo::class, true);
    }


    /**
     * @param Payload $payload
     * @param $type
     * @param $aesKey
     * @return Response
     */
    private static function extractResponse(Payload $payload, $type, $aesKey): Response
    {
        $response = Response::builder()->returnStateInfo($payload->returnStateInfo);
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
            $response->data(Util::json_deserialize($payload->data->content, $type));

        return $response;
    }

    /**
     * @param string $interfaceCode
     * @param Data $data
     * @param Serializer $serializer
     * @param $type
     * @param bool|string|null $aesKey
     * @return false|Response
     */
    public static function post(string $interfaceCode, Data $data, $type, bool|string|null $aesKey): false|Response
    {

        $globalInfo = new GlobalInfo(self::$tin, self::$deviceNo, $interfaceCode);
        $payload = new Payload(globalInfo: $globalInfo, data: $data); //::build()->data($data)->globalInfo($globalInfo);

        $curl = curl_init("https://efristest.ura.go.ug/efrisws/ws/taapp/getInformation");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, self::json_serialize($payload));
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

//Crypto::$privateKeyPath = "/home/sniper/certificates/private.p12";
//Crypto::$privateKeyPassword = "megasX665";
//
//$aesKey = Util::getAESKey("1000297995", "1000297995_03");
//if (!$aesKey)
//    return;
//$query = ProductQuery::build();
//
//$data = Data::builder()->content($query)->encrypt($aesKey)->sign();
//$globalInfo = new GlobalInfo("1000297995", "1000297995_03", "T127");
//$payload = Payload::build()->data($data)->globalInfo($globalInfo);

//---------

//$maintain = GoodsStockMaintain::build()
//    ->goodsStockIn(
//        StockIn::build()
//            ->operationType("101")
//            ->stockInType("101")
//            ->supplierName("Hole Enterprises"))
//    ->goodsStockInItem(
//        array(
//            StockInItem::build()
//                ->goodsCode("11011")
//                ->quantity("200")
//                ->unitPrice("1200")));
//
//$aesKey = Util::getAESKey("1000297995", "1000297995_03");
//if (!$aesKey)
//    return;
////var_dump(json_encode($maintain));
//$data = Data::builder()->content($maintain)->encrypt($aesKey)->sign();
//$globalInfo = new GlobalInfo("1000297995", "1000297995_03", "T131");
//$payload = Payload::build()->data($data)->globalInfo($globalInfo);

//----------------

//<$payload = Util::send($payload);
//if($payload) {
//    $payload->data->decrypt($aesKey);
//    /**
//     * @var $content array<MaintainResponse>
//     */
//    var_dump($payload->data->content);
//    $content = Util::json_deserialize($payload->data->content, ProductQueryResponse::class);
//    var_dump($content);
//}>

//--------------

//$product = new ProductUpload();
//$product->goodsName = "sweet apples bold";
//$product->goodsCode = "110012";
////$product->commodityCategoryId = "50202310";
//$product->measureUnit = "101";
//$product->unitPrice = "1200";
//$product->currency = "101";
//$product->stockPrewarning = "0";
//$content = array($product);
//
//$aesKey = Util::getAESKey("1000297995", "1000297995_03");
//if (!$aesKey)
//    return;
//
//$data = Data::builder()->content($content)->encrypt($aesKey)->sign();
//$globalInfo = new GlobalInfo("1000297995", "1000297995_03", "T130");
//$payload = Payload::build()->data($data)->globalInfo($globalInfo);
//try {
//    $payload = Util::send($payload);
//    if($payload)
//        $payload->data->decrypt($aesKey);
////    var_dump(json_decode($payload->data->content));
//    /**
//     * @var $content array<PartialProductUpload>
//     */
//    $content = Util::json_deserialise($payload->data->content, gettype(array()));
//    var_dump($content);
//} catch (JsonMapper_Exception $e) {
//}

//-------
//$encryptedContent = Crypto::aesEncrypt($content, $aesKey);
//$globalInfo = new GlobalInfo("1000297995", "1000297995_03");
//$globalInfo->interfaceCode = "T130";
//$data = Data::builder()
//    ->content($encryptedContent)
//    ->sign()
//    ->dataDescription(DataDescription::builder()
//        ->codeType("1")
//        ->encryptCode("2"));
//$payload = Payload::build()
//    ->globalInfo($globalInfo)
//    ->data($data);
//
//try {
//    $payload = Util::send($payload);
//    var_dump($payload);
//    $enc_content = $payload->data->content;
//    $json_content = Crypto::aesDecrypt($enc_content, $aesKey);
//
//    /**
//     * @var $content array<PartialProductUpload>
//     */
//    $content = json_decode($json_content);
////    var_dump($content);
//    $serializer = SerializerBuilder::create()->build();
////    var_dump($serializer->deserialize($json_content, 'array', 'json'));
//} catch (JsonMapper_Exception $e) {
//    var_dump($e->getMessage());
//}

