<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

class CreditNoteQuery
{
    public string $referenceNo;
    public string $invoiceNo;
    public string $oriInvoiceNo;
    public string $combineKeywords;
    public string $approveStatus;
    public string $queryType;
    public string $invoiceApplyCategoryCode;
    public string $startDate;
    public string $endDate;
    public string $pageNo;
    public string $pageSize;
    public string $creditNoteType;
    public string $branchName;
    public string $sellerTinOrNin;
    public string $sellerLegalOrBusinessName;

    public function __construct($pageNo, $pageSize, $queryType)
    {
        $this->pageSize = $pageSize;
        $this->pageNo = $pageNo;
        $this->queryType = $queryType;
    }

    public static function build($pageNo, $pageSize, $queryType): CreditNoteQuery
    {
        return new self($pageNo, $pageSize, $queryType);
    }

    /**
     * @param string $referenceNo
     * @return CreditNoteQuery
     */
    public function referenceNo(string $referenceNo): CreditNoteQuery
    {
        $this->referenceNo = $referenceNo;
        return $this;
    }

    /**
     * @param string $invoiceNo
     * @return CreditNoteQuery
     */
    public function invoiceNo(string $invoiceNo): CreditNoteQuery
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * @param string $oriInvoiceNo
     * @return CreditNoteQuery
     */
    public function oriInvoiceNo(string $oriInvoiceNo): CreditNoteQuery
    {
        $this->oriInvoiceNo = $oriInvoiceNo;
        return $this;
    }

    /**
     * @param string $combineKeywords
     * @return CreditNoteQuery
     */
    public function combineKeywords(string $combineKeywords): CreditNoteQuery
    {
        $this->combineKeywords = $combineKeywords;
        return $this;
    }

    /**
     * @param string $approveStatus
     * @return CreditNoteQuery
     */
    public function approveStatus(string $approveStatus): CreditNoteQuery
    {
        $this->approveStatus = $approveStatus;
        return $this;
    }

    /**
     * @param string $queryType
     * @return CreditNoteQuery
     */
    public function queryType(string $queryType): CreditNoteQuery
    {
        $this->queryType = $queryType;
        return $this;
    }

    /**
     * @param string $invoiceApplyCategoryCode
     * @return CreditNoteQuery
     */
    public function invoiceApplyCategoryCode(string $invoiceApplyCategoryCode): CreditNoteQuery
    {
        $this->invoiceApplyCategoryCode = $invoiceApplyCategoryCode;
        return $this;
    }

    /**
     * @param string $startDate
     * @return CreditNoteQuery
     */
    public function startDate(string $startDate): CreditNoteQuery
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @param string $endDate
     * @return CreditNoteQuery
     */
    public function endDate(string $endDate): CreditNoteQuery
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @param string $pageNo
     * @return CreditNoteQuery
     */
    public function pageNo(string $pageNo): CreditNoteQuery
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @param string $pageSize
     * @return CreditNoteQuery
     */
    public function pageSize(string $pageSize): CreditNoteQuery
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @param string $creditNoteType
     * @return CreditNoteQuery
     */
    public function creditNoteType(string $creditNoteType): CreditNoteQuery
    {
        $this->creditNoteType = $creditNoteType;
        return $this;
    }

    /**
     * @param string $branchName
     * @return CreditNoteQuery
     */
    public function branchName(string $branchName): CreditNoteQuery
    {
        $this->branchName = $branchName;
        return $this;
    }

    /**
     * @param string $sellerTinOrNin
     * @return CreditNoteQuery
     */
    public function sellerTinOrNin(string $sellerTinOrNin): CreditNoteQuery
    {
        $this->sellerTinOrNin = $sellerTinOrNin;
        return $this;
    }

    /**
     * @param string $sellerLegalOrBusinessName
     * @return CreditNoteQuery
     */
    public function sellerLegalOrBusinessName(string $sellerLegalOrBusinessName): CreditNoteQuery
    {
        $this->sellerLegalOrBusinessName = $sellerLegalOrBusinessName;
        return $this;
    }


}