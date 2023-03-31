<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class StockInItem
{
    public string $commodityGoodsId;
    public string $goodsCode;
    public string $measureUnit;
    public string $quantity;
    public string $unitPrice;
    public string $remarks;
    public string $fuelTankId;
    public string $lossQuantity;
    public string $originalQuantity;

    public static function build(): StockInItem
    {
        return new self();
    }

    /**
     * @param string $commodityGoodsId
     * @return StockInItem
     */
    public function commodityGoodsId(string $commodityGoodsId): StockInItem
    {
        $this->commodityGoodsId = $commodityGoodsId;
        return $this;
    }

    /**
     * @param string $goodsCode
     * @return StockInItem
     */
    public function goodsCode(string $goodsCode): StockInItem
    {
        $this->goodsCode = $goodsCode;
        return $this;
    }

    /**
     * @param string $measureUnit
     * @return StockInItem
     */
    public function measureUnit(string $measureUnit): StockInItem
    {
        $this->measureUnit = $measureUnit;
        return $this;
    }

    /**
     * @param string $quantity
     * @return StockInItem
     */
    public function quantity(string $quantity): StockInItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param string $unitPrice
     * @return StockInItem
     */
    public function unitPrice(string $unitPrice): StockInItem
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @param string $remarks
     * @return StockInItem
     */
    public function remarks(string $remarks): StockInItem
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * @param string $fuelTankId
     * @return StockInItem
     */
    public function fuelTankId(string $fuelTankId): StockInItem
    {
        $this->fuelTankId = $fuelTankId;
        return $this;
    }

    /**
     * @param string $lossQuantity
     * @return StockInItem
     */
    public function lossQuantity(string $lossQuantity): StockInItem
    {
        $this->lossQuantity = $lossQuantity;
        return $this;
    }

    /**
     * @param string $originalQuantity
     * @return StockInItem
     */
    public function originalQuantity(string $originalQuantity): StockInItem
    {
        $this->originalQuantity = $originalQuantity;
        return $this;
    }


}