<?php

namespace Sniper\EfrisLib\Invoicing;
class BuyerDetails
{
    public string $buyerTin;
    public string $buyerNinBrn;
    public string $buyerPassport;
    public string $buyerLegalName;
    public string $buyerBusinessName;
    public string $buyerAddress;
    public string $buyerEmail;
    public string $buyerMobilePhone;
    public string $buyerLinePhone;
    public string $buyerPlaceOfBusiness;
    public string $buyerCitizenship;
    public string $buyerSector;
    public string $buyerReferenceNo;

    public function __construct(public string $buyerType)
    {
    }
    
}