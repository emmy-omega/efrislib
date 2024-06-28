<?php

namespace Sniper\EfrisLib;


abstract class BaseModel
{
    public static function fromArray(array $data): self
    {
        $invoice = new static();
        foreach ($data as $key => $value) {
            if (property_exists($invoice, $key)) {
                if (is_array($value)) {
                    if (is_array($invoice->$key)) {
                        foreach($value as $subKey => $subValue) {
//                            $inCls = get_class($invoice->$key[$subKey])
                            $invoice->$key[$subKey] = $subValue;
                        }
                    } else {
                        $cls = get_class($invoice->$key);
                        $invoice->$key = $cls::fromArray($value);
                    }
                } else {
                    $invoice->$key = $value;
                }
            }
        }
        return $invoice;
    }
}