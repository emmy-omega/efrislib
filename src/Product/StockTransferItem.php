<?php

namespace Sniper\EfrisLib\Product;

use PhpParser\Node\Scalar\String_;

class StockTransferItem
{
    public function __construct(
        public string  $quantity,
        public ?string $commodityGoodsId=null,
        public ?string $goodsCode=null,
        public ?string $measureUnit=null,
        public ?string $remarks=null,
        public ?string $sourceFuelTankId=null,
        public ?string $destinationFuelTankId=null
    )
    {
    }
}