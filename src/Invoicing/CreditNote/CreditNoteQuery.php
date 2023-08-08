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
}