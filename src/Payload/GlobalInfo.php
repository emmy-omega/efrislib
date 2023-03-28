<?php

namespace Sniper\EfrisLib\Payload;

class GlobalInfo
{
    public string $appId = "AP04";
    public string $version = "1.1.20191201";
    public string $dataExchangeId = "9230489223014123";
    public string $interfaceCode;
    public string $requestTime;
    public string $requestCode = "TP";
    public string $responseCode = "TA";
    public string $userName = "admin";
    public string $deviceMAC = "admin";
    public string $taxpayerID = "1";
    public string $longitude = "116.397128";
    public string $latitude = "39.916527";
    public ExtendField $extendField;

    public function __construct(public string $tin, public string $deviceNo, public string $brn="") {
        $this->tin = $tin;
        $this->deviceNo = $deviceNo;
        $this->brn = $brn;
        $this->extendField = new ExtendField();
        $this->requestTime = date("Y-m-d H:i:s");
    }
    
}