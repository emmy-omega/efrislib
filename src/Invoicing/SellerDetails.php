<?php

namespace Sniper\EfrisLib\Invoicing;
class SellerDetails
{
    public string $tin;
    public string $ninBrn;
    public string $legalName;
    public string $businessName;
    public string $address;
    public string $mobilePhone;
    public string $linePhone;
    public string $emailAddress;
    public string $placeOfBusiness;
    public string $referenceNo;
    public string $branchId;
    public string $isCheckReference;

    public function __construct(string $tin, string $legalName, string $emailAddress, string $branchId)
    {
        $this->tin = $tin;
        $this->legalName = $legalName;
        $this->emailAddress = $emailAddress;
        $this->branchId = $branchId;
    }
}