<?php
namespace Sniper\EfrisLib;

use JsonMapper;
use JsonMapper_Exception;
use Sniper\EfrisLib\Payload\GlobalInfo;
use Sniper\EfrisLib\Payload\Payload;

class Util
{
    public static string $timeZone;
    /**
     * @throws JsonMapper_Exception
     */
    public static function send(Payload $payload): mixed
    {
        $curl = curl_init("https://efristest.ura.go.ug/efrisws/ws/taapp/getInformation");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array ("Content-Type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);
//        var_dump($response);
        if($response)
            return self::json_deserialize($response, new Payload());
        return $response;
    }

    /**
     * @throws JsonMapper_Exception
     */
    public static function getAESKey($tin, $deviceNo)
    {
        $globalInfo = new GlobalInfo($tin, $deviceNo);
        $globalInfo->interfaceCode = "T104";
        $payload = Payload::builder()
            ->globalInfo($globalInfo);
//        var_dump($payload);
        $payload = self::send($payload);
        $jsonContent = base64_decode($payload->data->content);
//        $aesResponse = self::json_deserialize($jsonContent, new AESKeyResponse());
        $passowrdDes = base64_decode(json_decode($jsonContent)->passowrdDes);
//        var_dump($passowrdDes);
        return Crypto::rsaDecrypt($passowrdDes);
    }

    /**
     * @throws JsonMapper_Exception
     */
    public static function json_deserialize(string $json, object $class): mixed
    {
        $mapper = new JsonMapper();
        return $mapper->map(json_decode($json), $class);
    }

}
