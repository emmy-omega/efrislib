<?php

namespace Sniper\EfrisLib\Product;

class GoodsOtherUnit
{
    public function __construct(
    public string $otherUnit,
    public string $otherScaled,
    public string $packageScaled,
    public ?string $otherPrice=null){}

}