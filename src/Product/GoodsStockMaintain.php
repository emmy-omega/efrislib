<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class GoodsStockMaintain
{
    public StockIn $goodsStockIn;
    /**
     * @var $goodsStockInItem array<StockInItem>
     */
    public array $goodsStockInItem = array();

    public function __construct($operationType, $supplierName)
    {
        $this->goodsStockIn(StockIn::build()->operationType($operationType)->supplierName($supplierName));
    }

    public static function build($operationType, $supplierName): GoodsStockMaintain
    {
        return new self($operationType, $supplierName);
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

    public function addGoodsStockInItem($goodsCode, $quantity, $unitPrice, $remarks=""): GoodsStockMaintain
    {
        $this->goodsStockInItem[] = StockInItem::build()->goodsCode($goodsCode)->quantity($quantity)
            ->unitPrice($unitPrice)->remarks($remarks);
        return $this;
    }

}