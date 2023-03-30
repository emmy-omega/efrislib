<?php

namespace Sniper\EfrisLib\Invoicing;

class Invoice
{
    public SellerDetails $sellerDetails;
    public BasicInformation $basicInformation;
    public BuyerDetails $buyerDetails;
    public BuyerExtend $buyerExtend;
    /**
     * @var array<GoodDetails>
     */
    public array $goodsDetails;

    public function __construct()
    {
    }
}