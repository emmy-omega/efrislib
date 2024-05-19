<?php

namespace Sniper\EfrisLib\Invoicing;
class BuyerDetails
{
    public function __construct(

        public string $buyerLegalName,
        public ?string $buyerTin = null,
        public ?string $buyerNinBrn = null,
        public ?string $buyerPassport = null,
        public ?string $buyerBusinessName = null,
        public ?string $buyerAddress = null,
        public ?string $buyerEmail = null,
        public ?string $buyerMobilePhone = null,
        public ?string $buyerLinePhone = null,
        public ?string $buyerPlaceOfBusi = null,
        public ?string $buyerCitizenship = null,
        public ?string $buyerSector = null,
        public ?string $buyerReferenceNo = null,
        public string $buyerType = "1")
    {
    }


}