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

    public static function fromArray(array $data): SellerDetails
    {
        $invoice = new self();
        foreach ($data as $key => $value) {
            if (property_exists($invoice, $key)) {
                $invoice->$key = $value;
            }
        }
        return $invoice;
    }
}