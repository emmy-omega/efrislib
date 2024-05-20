<?php

namespace Sniper\EfrisLib\Invoicing;
class BuyerExtend
{
    public function __construct(
        public ?string $propertyType = null,
        public ?string $district = null,
        public ?string $municipaltyCounty = null,
        public ?string $divisionSubcounty = null,
        public ?string $town = null,
        public ?string $cellVillage = null,
        public ?string $effectiveRegistrationDate = null,
        public ?string $meterStatus = null)
    {
    }
}