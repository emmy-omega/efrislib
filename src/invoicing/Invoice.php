<?php

namespace invoicing;

class Invoice
{
    public function __construct(private SellerDetails $sellerDetails, private BasicInformation $basicInformation,
                                private BuyerDetails  $buyerDetails, private BuyerExtend $buyerExtend,
                                private array         $goodsDetails)
    {
    }
}