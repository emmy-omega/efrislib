<?php

namespace payload;

class GlobalInfo
{
    private string $appId = "AP04";
    private string $version = "1.1.20191201";
    private string $dataExchangeId = "9230489223014123";
    private string $interfaceCode;
    private string $requestTime;
    private string $requestCode = "TP";
    private string $responseCode = "TA";
    private string $userName = "admin";
    private string $deviceMAC = "admin";
    private string $deviceNo;
    private string $tin;
    private string $brn;
    private string $taxpayerID = "1";
    private string $longitude = "116.397128";
    private string $latitude = "39.916527";
    private ExtendField $extendField;

    public function __construct(string $tin, string $deviceNo, string $brn="") {
        $this->tin = $tin;
        $this->deviceNo = $deviceNo;
        $this->brn = $brn;
        $this->extendField = new ExtendField();
    }

    /**
     * @return ExtendField
     */
    public function getExtendField(): ExtendField
    {
        return $this->extendField;
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return GlobalInfo
     */
    public function setAppId(string $appId): GlobalInfo
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return GlobalInfo
     */
    public function setVersion(string $version): GlobalInfo
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataExchangeId(): string
    {
        return $this->dataExchangeId;
    }

    /**
     * @param string $dataExchangeId
     * @return GlobalInfo
     */
    public function setDataExchangeId(string $dataExchangeId): GlobalInfo
    {
        $this->dataExchangeId = $dataExchangeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInterfaceCode(): string
    {
        return $this->interfaceCode;
    }

    /**
     * @param string $interfaceCode
     * @return GlobalInfo
     */
    public function setInterfaceCode(string $interfaceCode): GlobalInfo
    {
        $this->interfaceCode = $interfaceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestTime(): string
    {
        return $this->requestTime;
    }

    /**
     * @param string $requestTime
     * @return GlobalInfo
     */
    public function setRequestTime(string $requestTime): GlobalInfo
    {
        $this->requestTime = $requestTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestCode(): string
    {
        return $this->requestCode;
    }

    /**
     * @param string $requestCode
     * @return GlobalInfo
     */
    public function setRequestCode(string $requestCode): GlobalInfo
    {
        $this->requestCode = $requestCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseCode(): string
    {
        return $this->responseCode;
    }

    /**
     * @param string $responseCode
     * @return GlobalInfo
     */
    public function setResponseCode(string $responseCode): GlobalInfo
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return GlobalInfo
     */
    public function setUserName(string $userName): GlobalInfo
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceMAC(): string
    {
        return $this->deviceMAC;
    }

    /**
     * @param string $deviceMAC
     * @return GlobalInfo
     */
    public function setDeviceMAC(string $deviceMAC): GlobalInfo
    {
        $this->deviceMAC = $deviceMAC;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceNo(): string
    {
        return $this->deviceNo;
    }

    /**
     * @param string $deviceNo
     * @return GlobalInfo
     */
    public function setDeviceNo(string $deviceNo): GlobalInfo
    {
        $this->deviceNo = $deviceNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTin(): string
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     * @return GlobalInfo
     */
    public function setTin(string $tin): GlobalInfo
    {
        $this->tin = $tin;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrn(): string
    {
        return $this->brn;
    }

    /**
     * @param string $brn
     * @return GlobalInfo
     */
    public function setBrn(string $brn): GlobalInfo
    {
        $this->brn = $brn;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxpayerID(): string
    {
        return $this->taxpayerID;
    }

    /**
     * @param string $taxpayerID
     * @return GlobalInfo
     */
    public function setTaxpayerID(string $taxpayerID): GlobalInfo
    {
        $this->taxpayerID = $taxpayerID;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return GlobalInfo
     */
    public function setLongitude(string $longitude): GlobalInfo
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return GlobalInfo
     */
    public function setLatitude(string $latitude): GlobalInfo
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @param ExtendField $extendField
     */
    public function setExtendField(ExtendField $extendField): void
    {
        $this->extendField = $extendField;
    }

}