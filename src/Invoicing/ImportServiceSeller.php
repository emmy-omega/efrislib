<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\Misc\TaxpayerInfo;

class ImportServiceSeller
{
    public function __construct(
        public string $importBusinessAddress,
        public string $importEmailAddress,
        public string $importContactNumber,
        public string $importAddress,
        public string $importInvoiceDate,
        public string $importAttachmentName,
        public string $importAttachmentContent)
    {
    }

}