<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\BaseModel;

class Extend extends BaseModel
{
    public function __construct (public ?string $reason=null,
    public ?string $reasonCode=null) {}

//    public static function fromArray(array $data): Extend
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