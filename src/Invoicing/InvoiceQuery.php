<?php

namespace Sniper\EfrisLib\Invoicing;

class InvoiceQuery
{
    public function __construct(
        public ?string $oriInvoiceNo = null,
        public ?string $invoiceNo = null,
        public ?string $deviceNo = null,
        public ?string $buyerTin = null,
        public ?string $buyerNinBrn = null,
        public ?string $buyerLegalName = null,
        public ?string $combineKeywords = null,
        public ?string $invoiceType = null,
        public ?string $invoiceKind = null,
        public ?string $isInvalid = null,
        public ?string $isRefund = null,
        public ?string $startDate = null,
        public ?string $endDate = null,
        public string  $pageNo = "1",
        public string  $pageSize = "10",
        public ?string $referenceNo = null,
        public ?string $branchName = null,
        public ?string $queryType = null,
        public ?string $dataSource = null,
        public ?string $sellerLegalOrBusinessName = null)
    {
    }
}