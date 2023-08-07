<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class ProductUpload extends Builder
{
    /**
     * @var array<Product>
     */
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

    public function addProduct($operationType, $goodsName, $goodsCode, $measureUnit, $unitPrice, $currency,
                               $commodityCategoryId, $stockPrewarning, $haveExciseTax="102", $havePieceUnit="102"): ProductUpload
    {
        $product = Product::build()->operationType($operationType)->goodsName($goodsName)->goodsCode($goodsCode)
            ->measureUnit($measureUnit)->unitPrice($unitPrice)->currency($currency)
            ->commodityCategoryId($commodityCategoryId)->stockPrewarning($stockPrewarning)->haveExciseTax($haveExciseTax)
            ->havePieceUnit($havePieceUnit);
        $this->products[] = $product;
        return $this;
    }
}