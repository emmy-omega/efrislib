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

}