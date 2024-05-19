<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class ProductUpload
{
    /**
     * @var array<Product>
     */
    public array $products = array();

    public function addProducts(Product ...$products): ProductUpload
    {
        array_push($this->products, ...$products);
        return $this;
    }

    public function addProduct($operationType, $goodsName, $goodsCode, $measureUnit, $unitPrice, $currency,
                               $commodityCategoryId, $stockPrewarning, $haveExciseTax="102", $havePieceUnit="102"): ProductUpload
    {
        $product = new Product(goodsName: $goodsName, goodsCode: $goodsCode, measureUnit: $measureUnit, currency: $currency, commodityCategoryId: $commodityCategoryId, unitPrice: $unitPrice);
        $this->products[] = $product;
        return $this;
    }
}