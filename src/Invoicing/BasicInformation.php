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
}