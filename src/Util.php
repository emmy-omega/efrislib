<?php

namespace Sniper\EfrisLib;

use Sniper\EfrisLib\Invoicing\Invoice;
use Sniper\EfrisLib\Payload\Data;
use Sniper\EfrisLib\Payload\GlobalInfo;
use Sniper\EfrisLib\Payload\Payload;
use Sniper\EfrisLib\Product\GoodsStockMaintain;
use Sniper\EfrisLib\Product\Product;
use Sniper\EfrisLib\Product\ProductQuery;
use Sniper\EfrisLib\Product\ProductUpload;
use Sniper\EfrisLib\Response\Response;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Util
{
    public static string $timeZone;
    public static string $tin;
    public static string $deviceNo;
    public static string $aesKey;

    /**
     * @param Payload $payload
     * @return Payload|bool
     */
    public static function send(mixed $content, string $interfaceCode): Response|bool
    {
        $data = Data::builder()->content($content)->encrypt(Util::$aesKey)->sign();
        $globalInfo = new GlobalInfo(Util::$tin, Util::$deviceNo, $interfaceCode);
        $payload = Payload::build()->data($data)->globalInfo($globalInfo);

        $curl = curl_init("https://efristest.ura.go.ug/efrisws/ws/taapp/getInformation");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);
        if ($response) {
            $payload = self::json_deserialize($response, Payload::class);
            return self::extractResponse($payload, "array");
        }
        return false;
    }

    /**
     * @param $tin
     * @param $deviceNo
     * @return bool|string
     */
    public static function getAESKey($tin, $deviceNo): bool|string
    {
        $globalInfo = new GlobalInfo($tin, $deviceNo, "T104");
        $payload = Payload::build()
            ->globalInfo($globalInfo);
        $payload = self::send($payload);
        $jsonContent = base64_decode($payload->data->content);
        $passowrdDes = base64_decode(json_decode($jsonContent)->passowrdDes);
        return base64_decode(Crypto::rsaDecrypt($passowrdDes));
    }

    /**
     * @param string $json
     * @param string $type
     * @return mixed
     */
    public static function json_deserialize(string $json, string $type):mixed
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer(null, null, null, new ReflectionExtractor())];
        $serializer = new Serializer($normalizers, $encoders);
        if ($type == "array")
            return $serializer->decode($json, 'json');
        return $serializer->deserialize($json, $type, 'json',
            [AbstractObjectNormalizer::SKIP_NULL_VALUES, AbstractObjectNormalizer::SKIP_UNINITIALIZED_VALUES]);
    }

    /**
     * @param ProductUpload $products
     * @return Response
     */
    public static function configureProduct(ProductUpload $productUpload): Response {
        return Util::send($productUpload->products, "T130");
    }

    public static function queryProduct(string $pageSize="10", string $pageNo="1", $goodName=null, $goodsCode=null): Response
    {
        $query = ProductQuery::build()->pageSize($pageSize)->pageNo($pageNo)->goodsName($goodName)->goodsCode($goodsCode);
        return Util::send($query, "T127");
    }

    /**
     * @param GoodsStockMaintain $goodsStockMaintain
     * @return Response
     */
    public static function manageStock(GoodsStockMaintain $goodsStockMaintain): Response {
        $data = Data::builder()->content($goodsStockMaintain)->encrypt(Util::$aesKey)->sign();
        $globalInfo = new GlobalInfo(Util::$tin, Util::$deviceNo, "T130");
        $payload = Payload::build()->data($data)->globalInfo($globalInfo);
        $payload = Util::send($payload);
        return self::extractResponse($payload, "array");
    }

    private static function fiscalizeInvoice(Invoice $invoice): Response {
        $data = Data::builder()->content($invoice)->encrypt(Util::$aesKey)->sign();
        $globalInfo = new GlobalInfo(Util::$tin, Util::$deviceNo, "T130");
        $payload = Payload::build()->data($data)->globalInfo($globalInfo);
        $payload = Util::send($payload);
        return self::extractResponse($payload, "array");
    }


    private static function extractResponse($payload, $type)
    {
        $response = Response::builder()->returnStateInfo = $payload->returnStateInfo;
//        check encryption stata
        $isEncrypted = $payload->data->dataDescription->codeType == "1";
        $encryptCode = $payload->data->dataDescription->encryptCode;
        if ($isEncrypted and $encryptCode == "1") {
            $payload->data->decrtpy(Util::$aesKey);
        }
        $response->data(Util::json_deserialize($payload->data->content, $type));

        return $response;
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

