<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class GoodsStockMaintain
{

    public function __construct(public StockIn $goodsStockIn, public array $goodsStockInItem = array())
    {}

    public function addGoodsStockInItem(array $goodsStockInItems): int
    {
        return array_push($this->goodsStockInItem, ...$goodsStockInItems);
    }

}