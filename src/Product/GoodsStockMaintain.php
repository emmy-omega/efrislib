<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class GoodsStockMaintain
{
    public StockIn $goodsStockIn;
    /**
     * @var $goodsStockInItem array<StockInItem>
     */
    public array $goodsStockInItem;

    public static function build(): GoodsStockMaintain
    {
        return new self();
    }

    /**
     * @param StockIn $goodsStockIn
     * @return GoodsStockMaintain
     */
    public function goodsStockIn(StockIn $goodsStockIn): GoodsStockMaintain
    {
        $this->goodsStockIn = $goodsStockIn;
        return $this;
    }

    /**
     * @param array $goodsStockInItem
     * @return GoodsStockMaintain
     */
    public function goodsStockInItem(array $goodsStockInItem): GoodsStockMaintain
    {
        $this->goodsStockInItem = $goodsStockInItem;
        return $this;
    }


}