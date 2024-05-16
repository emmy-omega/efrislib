<?php

namespace Sniper\EfrisLib\Misc\Enums;

use JsonSerializable;
use Sniper\EfrisLib\Misc\Taxpayer;

enum TaxpayerType implements jsonSerializable
{
    case Individual;
    case NonIndividual;

    public function jsonSerialize(): mixed
    {
        return match ($this) {
            TaxpayerType::Individual => '201',
            TaxpayerType::NonIndividual => '202',
        };
    }
}
