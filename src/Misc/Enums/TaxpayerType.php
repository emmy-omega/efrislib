<?php

namespace Sniper\EfrisLib\Misc\Enums;

use InvalidArgumentException;
use JsonSerializable;
use Sniper\EfrisLib\Misc\Taxpayer;

enum TaxpayerType implements jsonSerializable
{
    case Individual;
    case NonIndividual;

    public function jsonSerialize(): string
    {
        return match ($this) {
            TaxpayerType::Individual => '201',
            TaxpayerType::NonIndividual => '202',
        };
    }

    public static function fromJson(string $value): self
    {
        return match ($value) {
            '201' => self::Individual,
            '202' => self::NonIndividual,
            default => throw new InvalidArgumentException("Invalid value for TaxpayerType enum"),
        };
    }
}
