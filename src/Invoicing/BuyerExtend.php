<?php

namespace Sniper\EfrisLib\Invoicing;
class BuyerExtend
{
    public function __construct(
        public string $propertyType,
        public string $district,
        public string $municipaltyCounty,
        public string $divisionSubcounty,
        public string $town,
        public string $cellVillage,
        public string $effectiveRegistrationDate,
        public string $meterStatus)
    {
    }
}