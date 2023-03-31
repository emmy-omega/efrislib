<?php

namespace Sniper\EfrisLib;

use Sniper\EfrisLib\Payload\GlobalInfo;
use Sniper\EfrisLib\Payload\Payload;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Util
{
    public static string $timeZone;

    /**
     * @param Payload $payload
     * @return Payload|bool
     */
    public static function send(Payload $payload): Payload|bool
    {
        $curl = curl_init("https://efristest.ura.go.ug/efrisws/ws/taapp/getInformation");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);
        if ($response)
            return self::json_deserialize($response,Payload::class);
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

