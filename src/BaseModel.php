<?php

namespace Sniper\EfrisLib;


class BaseModel
{
    public static function fromArray(array $data): self
    {
        $invoice = new self();
        foreach ($data as $key => $value) {
            if (property_exists($invoice, $key)) {
                if (is_array($value)) {
                    $invoice->$key = BaseModel::fromArray($value);
                } else {
                    $invoice->$key = $value;
                }
            }
        }
        return $invoice;
    }
}