<?php

namespace invoicing;
class BasicInformation
{
    private string $invoiceNo;
    private string $antifakeCode;
    private string $oriInvoiceId;
    private string $invoiceIndustryCode;
    private string $isBatch;
    private string $currencyRate;

    public function __construct(private string $deviceNo, private string $issuedDate, private string $operator,
                                private string $currency, private string $invoiceType, private string $invoiceKind,
                                private string $dataSource = "103")
    {
    }

    /**
     * @return string
     */
    public function getInvoiceNo(): string
    {
        return $this->invoiceNo;
    }

    /**
     * @param string $invoiceNo
     * @return BasicInformation
     */
    public function setInvoiceNo(string $invoiceNo): BasicInformation
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAntifakeCode(): string
    {
        return $this->antifakeCode;
    }

    /**
     * @param string $antifakeCode
     * @return BasicInformation
     */
    public function setAntifakeCode(string $antifakeCode): BasicInformation
    {
        $this->antifakeCode = $antifakeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriInvoiceId(): string
    {
        return $this->oriInvoiceId;
    }

    /**
     * @param string $oriInvoiceId
     * @return BasicInformation
     */
    public function setOriInvoiceId(string $oriInvoiceId): BasicInformation
    {
        $this->oriInvoiceId = $oriInvoiceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceIndustryCode(): string
    {
        return $this->invoiceIndustryCode;
    }

    /**
     * @param string $invoiceIndustryCode
     * @return BasicInformation
     */
    public function setInvoiceIndustryCode(string $invoiceIndustryCode): BasicInformation
    {
        $this->invoiceIndustryCode = $invoiceIndustryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsBatch(): string
    {
        return $this->isBatch;
    }

    /**
     * @param string $isBatch
     * @return BasicInformation
     */
    public function setIsBatch(string $isBatch): BasicInformation
    {
        $this->isBatch = $isBatch;
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
     * @return BasicInformation
     */
    public function setDeviceNo(string $deviceNo): BasicInformation
    {
        $this->deviceNo = $deviceNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuedDate(): string
    {
        return $this->issuedDate;
    }

    /**
     * @param string $issuedDate
     * @return BasicInformation
     */
    public function setIssuedDate(string $issuedDate): BasicInformation
    {
        $this->issuedDate = $issuedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     * @return BasicInformation
     */
    public function setOperator(string $operator): BasicInformation
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return BasicInformation
     */
    public function setCurrency(string $currency): BasicInformation
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceType(): string
    {
        return $this->invoiceType;
    }

    /**
     * @param string $invoiceType
     * @return BasicInformation
     */
    public function setInvoiceType(string $invoiceType): BasicInformation
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceKind(): string
    {
        return $this->invoiceKind;
    }

    /**
     * @param string $invoiceKind
     * @return BasicInformation
     */
    public function setInvoiceKind(string $invoiceKind): BasicInformation
    {
        $this->invoiceKind = $invoiceKind;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataSource(): string
    {
        return $this->dataSource;
    }

    /**
     * @param string $dataSource
     * @return BasicInformation
     */
    public function setDataSource(string $dataSource): BasicInformation
    {
        $this->dataSource = $dataSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyRate(): string
    {
        return $this->currencyRate;
    }

    /**
     * @param string $currencyRate
     * @return BasicInformation
     */
    public function setCurrencyRate(string $currencyRate): BasicInformation
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

}