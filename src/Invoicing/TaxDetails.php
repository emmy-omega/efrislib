<?php

namespace Sniper\EfrisLib\Invoicing;

class TaxDetails
{
    public function __construct(
        public string  $netAmount,
        public string  $taxAmount,
        public string  $grossAmount,
        public ?string $taxCategory=null,
        public ?string $taxCategoryCode = null,
        public ?string $taxRate = null,
        public ?string $exciseUnit = null,
        public ?string $exciseCurrency = null,
        public ?string $taxRateName = null)
    {
    }
}