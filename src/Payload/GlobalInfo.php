<?php

namespace Sniper\EfrisLib\Payload;

use JsonSerializable;
use function PHPUnit\Framework\isEmpty;

class GlobalInfo implements JsonSerializable
{

    public function __construct(public string $tin, public string $deviceNo, public string $interfaceCode,
                                public string $brn = "", public string $appId = "AP04",
                                public string $version = "1.1.20191201", public string $dataExchangeId = "9230489223014123",
                                public string $requestTime = "", public string $requestCode = "TP", public string $responseCode = "TA",
                                public string $userName = "admin", public string $deviceMAC = "admin", public string $taxpayerID = "1",
                                public string $longitude = "116.397128", public string $latitude = "39.916527", public ExtendField $extendField = new ExtendField())
    {
        $this->extendField = new ExtendField();
        $this->requestTime = empty($requestTime) ? date("Y-m-d H:i:s") : $requestTime;
    }

    public function jsonSerialize(): array
    {
        return ['tin' => $this->tin, 'deviceNo' => $this->deviceNo, 'interfaceCode' => $this->interfaceCode,
            'brn' => $this->brn, 'appId' => $this->appId, 'version' => $this->version, 'dataExchangeId' => $this->dataExchangeId,
            'requestTime' => $this->requestTime, 'requestCode' => $this->requestCode, 'responseCode' => $this->responseCode,
            'userName' => $this->userName, 'deviceMAC' => $this->deviceMAC, 'taxpayerID' => $this->taxpayerID,
            'longitude' => $this->longitude, 'latitude' => $this->latitude, 'extendField' => $this->extendField->jsonSerialize()];
    }

    public static function fromJson(array $jsonData): self
    {
        return new self($jsonData['tin'], $jsonData['deviceNo'], $jsonData['interfaceCode'], $jsonData['brn'], $jsonData['appId'],
            $jsonData['version'], $jsonData['dataExchangeId'], $jsonData['requestTime'], $jsonData['requestCode'], $jsonData['responseCode'],
            $jsonData['userName'], $jsonData['deviceMAC'], $jsonData['taxpayerID'], $jsonData['longitude'], $jsonData['latitude'], ExtendField::fromJson($jsonData['extendField']));
    }
}