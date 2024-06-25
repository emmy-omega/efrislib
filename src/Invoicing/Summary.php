<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\Misc\TaxpayerInfo;

class Summary
{
    public function __construct(
        public string $netAmount,
        public string $taxAmount,
        public string $grossAmount,
        public string $itemCount,
        public ?string $qrCode='',
        public string $modeCode = "1",
    )
    {
    }

}