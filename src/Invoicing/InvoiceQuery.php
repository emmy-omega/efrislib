<?php

namespace Sniper\EfrisLib\Invoicing;

class InvoiceQuery
{
    public string $oriInvoiceNo;
    public string $invoiceNo;
    public string $deviceNo;
    public string $buyerTin;
    public string $buyerNinBrn;
    public string $buyerLegalName;
    public string $combineKeywords;
    public string $invoiceType;
    public string $invoiceKind;
    public string $isInvalid;
    public string $isRefund;
    public string $startDate;
    public string $endDate;
    public string $pageNo;
    public string $pageSize;
    public string $referenceNo;
    public string $branchName;
    public string $queryType;
    public string $dataSource;
    public string $sellerLegalOrBusinessName;

    public function __construct($invoiceKind, $pageNo, $pageSize)
    {
        $this->invoiceKind = $invoiceKind;
        $this->pageNo = $pageNo;
        $this->pageSize = $pageSize;
    }

    public static function build($invoiceKind, $pageNo, $pageSize): InvoiceQuery
    {
        return new self($invoiceKind, $pageNo, $pageSize);
    }

    /**
     * @param string $oriInvoiceNo
     * @return InvoiceQuery
     */
    public function oriInvoiceNo(string $oriInvoiceNo): InvoiceQuery
    {
        $this->oriInvoiceNo = $oriInvoiceNo;
        return $this;
    }

    /**
     * @param string $invoiceNo
     * @return InvoiceQuery
     */
    public function invoiceNo(string $invoiceNo): InvoiceQuery
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * @param string $deviceNo
     * @return InvoiceQuery
     */
    public function deviceNo(string $deviceNo): InvoiceQuery
    {
        $this->deviceNo = $deviceNo;
        return $this;
    }

    /**
     * @param string $buyerTin
     * @return InvoiceQuery
     */
    public function buyerTin(string $buyerTin): InvoiceQuery
    {
        $this->buyerTin = $buyerTin;
        return $this;
    }

    /**
     * @param string $buyerNinBrn
     * @return InvoiceQuery
     */
    public function buyerNinBrn(string $buyerNinBrn): InvoiceQuery
    {
        $this->buyerNinBrn = $buyerNinBrn;
        return $this;
    }

    /**
     * @param string $buyerLegalName
     * @return InvoiceQuery
     */
    public function buyerLegalName(string $buyerLegalName): InvoiceQuery
    {
        $this->buyerLegalName = $buyerLegalName;
        return $this;
    }

    /**
     * @param string $combineKeywords
     * @return InvoiceQuery
     */
    public function combineKeywords(string $combineKeywords): InvoiceQuery
    {
        $this->combineKeywords = $combineKeywords;
        return $this;
    }

    /**
     * @param string $invoiceType
     * @return InvoiceQuery
     */
    public function invoiceType(string $invoiceType): InvoiceQuery
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * @param string $invoiceKind
     * @return InvoiceQuery
     */
    public function invoiceKind(string $invoiceKind): InvoiceQuery
    {
        $this->invoiceKind = $invoiceKind;
        return $this;
    }

    /**
     * @param string $isInvalid
     * @return InvoiceQuery
     */
    public function isInvalid(string $isInvalid): InvoiceQuery
    {
        $this->isInvalid = $isInvalid;
        return $this;
    }

    /**
     * @param string $isRefund
     * @return InvoiceQuery
     */
    public function isRefund(string $isRefund): InvoiceQuery
    {
        $this->isRefund = $isRefund;
        return $this;
    }

    /**
     * @param string $startDate
     * @return InvoiceQuery
     */
    public function startDate(string $startDate): InvoiceQuery
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @param string $endDate
     * @return InvoiceQuery
     */
    public function endDate(string $endDate): InvoiceQuery
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @param string $pageNo
     * @return InvoiceQuery
     */
    public function pageNo(string $pageNo): InvoiceQuery
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @param string $pageSize
     * @return InvoiceQuery
     */
    public function pageSize(string $pageSize): InvoiceQuery
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @param string $referenceNo
     * @return InvoiceQuery
     */
    public function referenceNo(string $referenceNo): InvoiceQuery
    {
        $this->referenceNo = $referenceNo;
        return $this;
    }

    /**
     * @param string $branchName
     * @return InvoiceQuery
     */
    public function branchName(string $branchName): InvoiceQuery
    {
        $this->branchName = $branchName;
        return $this;
    }

    /**
     * @param string $queryType
     * @return InvoiceQuery
     */
    public function queryType(string $queryType): InvoiceQuery
    {
        $this->queryType = $queryType;
        return $this;
    }

    /**
     * @param string $dataSource
     * @return InvoiceQuery
     */
    public function dataSource(string $dataSource): InvoiceQuery
    {
        $this->dataSource = $dataSource;
        return $this;
    }

    /**
     * @param string $sellerLegalOrBusinessName
     * @return InvoiceQuery
     */
    public function sellerLegalOrBusinessName(string $sellerLegalOrBusinessName): InvoiceQuery
    {
        $this->sellerLegalOrBusinessName = $sellerLegalOrBusinessName;
        return $this;
    }


}