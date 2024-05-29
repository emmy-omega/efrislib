<?php

namespace Sniper\EfrisLib\Product;

use PhpParser\Node\Scalar\String_;

class StockTransferItem
{
    public function __construct(
        public ?string $commodityGoodsId,
        public ?string $goodsCode,
        public ?string $measureUnit,
        public string  $quantity,
        public ?string $remarks,
        public ?string $sourceFuelTankId,
        public ?string $destinationFuelTankId
    )
    {
    }
}