<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\Misc\TaxpayerInfo;

class ImportServiceSeller
{
    public function __construct(
        public string $importInvoiceDate,
        public ?string $importBusinessAddress=null,
        public ?string $importEmailAddress=null,
        public ?string $importContactNumber=null,
        public ?string $importAddress=null,
        public ?string $importAttachmentName=null,
        public ?string $importAttachmentContent=null)
    {
    }

}