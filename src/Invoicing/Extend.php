<?php

namespace Sniper\EfrisLib\Invoicing;

class Extend
{
    public function __construct (public ?string $reason=null,
    public ?string $reasonCode=null) {}

    public static function fromArray(array $data): Extend
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