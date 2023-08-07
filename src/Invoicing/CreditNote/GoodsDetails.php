<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

class GoodsDetails
{
    public string $item;
    public string $itemCode;
    public string $total;
    public string $taxRate;
    public string $tax;
    public string $orderNumber;
    public string $deemedFlag;
    public string $exciseFlag;
    public string $goodsCategoryId;
    public string $qty;
    public string $unitOfMeasure;
    public string $unitPrice;
    public string $discountTaxRate;
    public string $categoryId;
    public string $categoryName;
    public string $goodsCategoryName;
    public string $exciseRate;
    public string $exciseRule;
    public string $exciseTax;
    public string $pack;
    public string $pick;
    public string $exciseUnit;
    public string $exciseCurrency;
    public string $exciseRateName;
    public string $vatApplicableFlag;

    public static function builder(): GoodsDetails
    {
        return new self();
    }

    /**
     * @param string $qty
     * @return GoodsDetails
     */
    public function qty(string $qty): GoodsDetails
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @param string $unitOfMeasure
     * @return GoodsDetails
     */
    public function unitOfMeasure(string $unitOfMeasure): GoodsDetails
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * @param string $unitPrice
     * @return GoodsDetails
     */
    public function unitPrice(string $unitPrice): GoodsDetails
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @param string $discountTaxRate
     * @return GoodsDetails
     */
    public function discountTaxRate(string $discountTaxRate): GoodsDetails
    {
        $this->discountTaxRate = $discountTaxRate;
        return $this;
    }

    /**
     * @param string $categoryId
     * @return GoodsDetails
     */
    public function categoryId(string $categoryId): GoodsDetails
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @param string $categoryName
     * @return GoodsDetails
     */
    public function categoryName(string $categoryName): GoodsDetails
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @param string $goodsCategoryName
     * @return GoodsDetails
     */
    public function goodsCategoryName(string $goodsCategoryName): GoodsDetails
    {
        $this->goodsCategoryName = $goodsCategoryName;
        return $this;
    }

    /**
     * @param string $exciseRate
     * @return GoodsDetails
     */
    public function exciseRate(string $exciseRate): GoodsDetails
    {
        $this->exciseRate = $exciseRate;
        return $this;
    }

    /**
     * @param string $exciseRule
     * @return GoodsDetails
     */
    public function exciseRule(string $exciseRule): GoodsDetails
    {
        $this->exciseRule = $exciseRule;
        return $this;
    }

    /**
     * @param string $exciseTax
     * @return GoodsDetails
     */
    public function exciseTax(string $exciseTax): GoodsDetails
    {
        $this->exciseTax = $exciseTax;
        return $this;
    }

    /**
     * @param string $pack
     * @return GoodsDetails
     */
    public function pack(string $pack): GoodsDetails
    {
        $this->pack = $pack;
        return $this;
    }

    /**
     * @param string $pick
     * @return GoodsDetails
     */
    public function pick(string $pick): GoodsDetails
    {
        $this->pick = $pick;
        return $this;
    }

    /**
     * @param string $exciseUnit
     * @return GoodsDetails
     */
    public function exciseUnit(string $exciseUnit): GoodsDetails
    {
        $this->exciseUnit = $exciseUnit;
        return $this;
    }

    /**
     * @param string $exciseCurrency
     * @return GoodsDetails
     */
    public function exciseCurrency(string $exciseCurrency): GoodsDetails
    {
        $this->exciseCurrency = $exciseCurrency;
        return $this;
    }

    /**
     * @param string $exciseRateName
     * @return GoodsDetails
     */
    public function exciseRateName(string $exciseRateName): GoodsDetails
    {
        $this->exciseRateName = $exciseRateName;
        return $this;
    }

    /**
     * @param string $vatApplicableFlag
     * @return GoodsDetails
     */
    public function vatApplicableFlag(string $vatApplicableFlag): GoodsDetails
    {
        $this->vatApplicableFlag = $vatApplicableFlag;
        return $this;
    }

    /**
     * @param string $item
     * @return GoodsDetails
     */
    public function item(string $item): GoodsDetails
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @param string $itemCode
     * @return GoodsDetails
     */
    public function itemCode(string $itemCode): GoodsDetails
    {
        $this->itemCode = $itemCode;
        return $this;
    }

    /**
     * @param string $total
     * @return GoodsDetails
     */
    public function total(string $total): GoodsDetails
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @param string $taxRate
     * @return GoodsDetails
     */
    public function taxRate(string $taxRate): GoodsDetails
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @param string $tax
     * @return GoodsDetails
     */
    public function tax(string $tax): GoodsDetails
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @param string $orderNumber
     * @return GoodsDetails
     */
    public function orderNumber(string $orderNumber): GoodsDetails
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @param string $deemedFlag
     * @return GoodsDetails
     */
    public function deemedFlag(string $deemedFlag): GoodsDetails
    {
        $this->deemedFlag = $deemedFlag;
        return $this;
    }

    /**
     * @param string $exciseFlag
     * @return GoodsDetails
     */
    public function exciseFlag(string $exciseFlag): GoodsDetails
    {
        $this->exciseFlag = $exciseFlag;
        return $this;
    }

    /**
     * @param string $goodsCategoryId
     * @return GoodsDetails
     */
    public function goodsCategoryId(string $goodsCategoryId): GoodsDetails
    {
        $this->goodsCategoryId = $goodsCategoryId;
        return $this;
    }

}