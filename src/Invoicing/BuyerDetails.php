<?php

namespace Sniper\EfrisLib\Invoicing;
use Sniper\EfrisLib\BaseModel;

class BuyerDetails extends BaseModel
{
    public function __construct(

        public ?string $buyerLegalName=null,
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

//    public static function fromArray(array $data): BuyerDetails
//    {
//        $invoice = new self();
//        foreach ($data as $key => $value) {
//            if (property_exists($invoice, $key)) {
//                $invoice->$key = $value;
//            }
//        }
//        return $invoice;
//    }


}