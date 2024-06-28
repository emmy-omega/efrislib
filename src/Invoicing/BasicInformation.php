<?php

namespace Sniper\EfrisLib\Invoicing;
class BasicInformation
{
    public function __construct(
        public ?string $deviceNo=null,
        public ?string $issuedDate=null,
        public ?string $operator=null,
        public ?string $invoiceNo=null,
        public ?string $oriInvoiceId=null,
        public ?string $isBatch=null,
        public ?string $antifakeCode=null,
        public ?string $currencyRate=null,
        public ?string $invoiceIndustryCode = "101",
        public ?string $currency = "UGX",
        public ?string $invoiceType = "1",
        public ?string $invoiceKind = "2",
        public ?string $dataSource = "103")
    {
    }

    public static function fromArray(array $data): BasicInformation
    {
        $invoice = new self();
        foreach ($data as $key => $value) {
            if (property_exists($invoice, $key)) {
                $invoice->$key = $value;
            }
        }
        return $invoice;
    }
}