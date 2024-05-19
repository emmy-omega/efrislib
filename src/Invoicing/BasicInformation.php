<?php

namespace Sniper\EfrisLib\Invoicing;
class BasicInformation
{
    public function __construct(
        public string $deviceNo,
        public string $issuedDate,
        public string $operator,
        public ?string $invoiceNo=null,
        public ?string $oriInvoiceId=null,
        public ?string $isBatch=null,
        public ?string $antifakeCode=null,
        public ?string $currencyRate=null,
        public string $invoiceIndustryCode = "101",
        public string $currency = "UGX",
        public string $invoiceType = "1",
        public string $invoiceKind = "2",
        public string $dataSource = "103")
    {
    }
}