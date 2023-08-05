<?php

namespace Sniper\EfrisLib\Invoicing;
class BasicInformation
{
    public string $invoiceNo;
    public string $antifakeCode;
    public string $oriInvoiceId;
    public string $invoiceIndustryCode;
    public string $isBatch;
    public string $currencyRate;

    public function __construct(public string $deviceNo, public string $issuedDate, public string $operator,
                                public string $currency, public string $invoiceType, public string $invoiceKind,
                                public string $dataSource = "103")
    {
    }

    public static function builder(): BasicInformation
    {
        return new self();
    }

    /**
     * @param string $invoiceNo
     * @return BasicInformation
     */
    public function invoiceNo(string $invoiceNo): BasicInformation
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * @param string $antifakeCode
     * @return BasicInformation
     */
    public function antifakeCode(string $antifakeCode): BasicInformation
    {
        $this->antifakeCode = $antifakeCode;
        return $this;
    }

    /**
     * @param string $oriInvoiceId
     * @return BasicInformation
     */
    public function oriInvoiceId(string $oriInvoiceId): BasicInformation
    {
        $this->oriInvoiceId = $oriInvoiceId;
        return $this;
    }

    /**
     * @param string $invoiceIndustryCode
     * @return BasicInformation
     */
    public function invoiceIndustryCode(string $invoiceIndustryCode): BasicInformation
    {
        $this->invoiceIndustryCode = $invoiceIndustryCode;
        return $this;
    }

    /**
     * @param string $isBatch
     * @return BasicInformation
     */
    public function isBatch(string $isBatch): BasicInformation
    {
        $this->isBatch = $isBatch;
        return $this;
    }

    /**
     * @param string $currencyRate
     * @return BasicInformation
     */
    public function currencyRate(string $currencyRate): BasicInformation
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * @param string $deviceNo
     * @return BasicInformation
     */
    public function deviceNo(string $deviceNo): BasicInformation
    {
        $this->deviceNo = $deviceNo;
        return $this;
    }

    /**
     * @param string $issuedDate
     * @return BasicInformation
     */
    public function issuedDate(string $issuedDate): BasicInformation
    {
        $this->issuedDate = $issuedDate;
        return $this;
    }

    /**
     * @param string $operator
     * @return BasicInformation
     */
    public function operator(string $operator): BasicInformation
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @param string $currency
     * @return BasicInformation
     */
    public function currency(string $currency): BasicInformation
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param string $invoiceType
     * @return BasicInformation
     */
    public function invoiceType(string $invoiceType): BasicInformation
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * @param string $invoiceKind
     * @return BasicInformation
     */
    public function invoiceKind(string $invoiceKind): BasicInformation
    {
        $this->invoiceKind = $invoiceKind;
        return $this;
    }

    /**
     * @param string $dataSource
     * @return BasicInformation
     */
    public function dataSource(string $dataSource): BasicInformation
    {
        $this->dataSource = $dataSource;
        return $this;
    }


}