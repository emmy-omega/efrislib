<?php

namespace Sniper\EfrisLib\Invoicing;

class Invoice
{
    public function __construct(public SellerDetails $sellerDetails, public BasicInformation $basicInformation,
                                public BuyerDetails  $buyerDetails, public BuyerExtend $buyerExtend,
                                public array         $goodsDetails)
    {
    }
}