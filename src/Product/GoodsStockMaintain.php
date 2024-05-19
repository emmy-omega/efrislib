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

    public function __construct($operationType, $supplierName, $stockInType)
    {
        $this->goodsStockIn(goodsStockIn: new StockIn(operationType: $operationType, supplierName: $supplierName, stockInType: $stockInType));
    }

    public static function build($operationType, $supplierName, $stockInType): GoodsStockMaintain
    {
        return new self($operationType, $supplierName, $stockInType);
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
        $this->goodsStockInItem[] = new StockInItem(quantity: $quantity, unitPrice: $unitPrice, goodsCode: $goodsCode, remarks: $remarks);
        return $this;
    }

}