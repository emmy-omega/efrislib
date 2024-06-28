<?php

namespace Sniper\EfrisLib\Invoicing;
class SellerDetails
{
    public function __construct(
        public ?string $tin=null,
        public ?string $legalName=null,
        public ?string $emailAddress=null,
        public ?string $ninBrn=null,
        public ?string $businessName=null,
        public ?string $address=null,
        public ?string $mobilePhone=null,
        public ?string $linePhone=null,
    public ?string $placeOfBusiness=null,
    public ?string $referenceNo=null,
    public ?string $branchId=null,
    public ?string $isCheckReference=null) {}
}