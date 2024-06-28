<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\BaseModel;
use Sniper\EfrisLib\Misc\TaxpayerInfo;

class ImportServiceSeller extends BaseModel
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

//    public static function fromArray(array $data): ImportServiceSeller
//    {
//        $invoice = new self();
//        foreach ($data as $key => $value) {
//            if (property_exists($invoice, $key)) {
//                $invoice->$key = $value;
//            }
//        }
//        return $invoice;
//    }

}