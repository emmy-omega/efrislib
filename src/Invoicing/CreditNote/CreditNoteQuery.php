<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

class CreditNoteQuery
{
    public function __construct(
    public ?string $referenceNo=null,
    public ?string $invoiceNo=null,
    public ?string $oriInvoiceNo=null,
    public ?string $combineKeywords=null,
    public ?string $approveStatus=null,
    public ?string $queryType = '1',
    public ?string $invoiceApplyCategoryCode=null,
    public ?string $startDate=null,
    public ?string $endDate=null,
    public string $pageNo='1',
    public string $pageSize='10',
    public ?string $creditNoteType=null,
    public ?string $branchName=null,
    public ?string $sellerTinOrNin=null,
    public ?string $sellerLegalOrBusinessName=null)
    {}

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