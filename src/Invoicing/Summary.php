<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\BaseModel;
use Sniper\EfrisLib\Misc\TaxpayerInfo;

class Summary extends BaseModel
{
    public function __construct(
        public ?string $netAmount=null,
        public ?string $taxAmount=null,
        public ?string $grossAmount=null,
        public ?string $itemCount=null,
        public ?string $qrCode='',
        public string $modeCode = "1",
    )
    {
    }

//    public static function fromArray(array $data): Summary
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