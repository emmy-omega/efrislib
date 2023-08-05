<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class ProductUpload extends Builder
{
    public array $products = array();

    public static function build(): ProductUpload
    {
        return new self();
    }

    public function addProducts(Product ...$products): ProductUpload
    {
        array_push($this->products, ...$products);
        return $this;
    }
}