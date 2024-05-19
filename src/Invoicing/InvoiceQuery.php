<?php

namespace Sniper\EfrisLib\Invoicing;

class InvoiceQuery
{
    public function __construct(
        public string $oriInvoiceNo,
        public string $invoiceNo,
        public string $deviceNo,
        public string $buyerTin,
        public string $buyerNinBrn,
        public string $buyerLegalName,
        public string $combineKeywords,
        public string $invoiceType,
        public string $invoiceKind,
        public string $isInvalid,
        public string $isRefund,
        public string $startDate,
        public string $endDate,
        public string $pageNo,
        public string $pageSize,
        public string $referenceNo,
        public string $branchName,
        public string $queryType,
        public string $dataSource,
        public string $sellerLegalOrBusinessName)
    {
    }
}