<?php

namespace Sniper\EfrisLib\Invoicing;
class GoodDetails
{
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

//    public function __construct(public string $item, public string $itemCode, public string $total,
//                                public string $taxRate, public string $tax, public string $orderNumber,
//                                public string $discountFlag, public string $deemedFlag, public string $exciseFlag,
//                                public string $goodsCategoryId)
//    {
//    }

    public static function builder(): GoodDetails
    {
        return new self();
    }

    /**
     * @param string $qty
     * @return GoodDetails
     */
    public function qty(string $qty): GoodDetails
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @param string $unitOfMeasure
     * @return GoodDetails
     */
    public function unitOfMeasure(string $unitOfMeasure): GoodDetails
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * @param string $unitPrice
     * @return GoodDetails
     */
    public function unitPrice(string $unitPrice): GoodDetails
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @param string $discountTaxRate
     * @return GoodDetails
     */
    public function discountTaxRate(string $discountTaxRate): GoodDetails
    {
        $this->discountTaxRate = $discountTaxRate;
        return $this;
    }

    /**
     * @param string $categoryId
     * @return GoodDetails
     */
    public function categoryId(string $categoryId): GoodDetails
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @param string $categoryName
     * @return GoodDetails
     */
    public function categoryName(string $categoryName): GoodDetails
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @param string $goodsCategoryName
     * @return GoodDetails
     */
    public function goodsCategoryName(string $goodsCategoryName): GoodDetails
    {
        $this->goodsCategoryName = $goodsCategoryName;
        return $this;
    }

    /**
     * @param string $exciseRate
     * @return GoodDetails
     */
    public function exciseRate(string $exciseRate): GoodDetails
    {
        $this->exciseRate = $exciseRate;
        return $this;
    }

    /**
     * @param string $exciseRule
     * @return GoodDetails
     */
    public function exciseRule(string $exciseRule): GoodDetails
    {
        $this->exciseRule = $exciseRule;
        return $this;
    }

    /**
     * @param string $exciseTax
     * @return GoodDetails
     */
    public function exciseTax(string $exciseTax): GoodDetails
    {
        $this->exciseTax = $exciseTax;
        return $this;
    }

    /**
     * @param string $pack
     * @return GoodDetails
     */
    public function pack(string $pack): GoodDetails
    {
        $this->pack = $pack;
        return $this;
    }

    /**
     * @param string $pick
     * @return GoodDetails
     */
    public function pick(string $pick): GoodDetails
    {
        $this->pick = $pick;
        return $this;
    }

    /**
     * @param string $exciseUnit
     * @return GoodDetails
     */
    public function exciseUnit(string $exciseUnit): GoodDetails
    {
        $this->exciseUnit = $exciseUnit;
        return $this;
    }

    /**
     * @param string $exciseCurrency
     * @return GoodDetails
     */
    public function exciseCurrency(string $exciseCurrency): GoodDetails
    {
        $this->exciseCurrency = $exciseCurrency;
        return $this;
    }

    /**
     * @param string $exciseRateName
     * @return GoodDetails
     */
    public function exciseRateName(string $exciseRateName): GoodDetails
    {
        $this->exciseRateName = $exciseRateName;
        return $this;
    }

    /**
     * @param string $vatApplicableFlag
     * @return GoodDetails
     */
    public function vatApplicableFlag(string $vatApplicableFlag): GoodDetails
    {
        $this->vatApplicableFlag = $vatApplicableFlag;
        return $this;
    }

    /**
     * @param string $item
     * @return GoodDetails
     */
    public function item(string $item): GoodDetails
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @param string $itemCode
     * @return GoodDetails
     */
    public function itemCode(string $itemCode): GoodDetails
    {
        $this->itemCode = $itemCode;
        return $this;
    }

    /**
     * @param string $total
     * @return GoodDetails
     */
    public function total(string $total): GoodDetails
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @param string $taxRate
     * @return GoodDetails
     */
    public function taxRate(string $taxRate): GoodDetails
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @param string $tax
     * @return GoodDetails
     */
    public function tax(string $tax): GoodDetails
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @param string $orderNumber
     * @return GoodDetails
     */
    public function orderNumber(string $orderNumber): GoodDetails
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @param string $discountFlag
     * @return GoodDetails
     */
    public function discountFlag(string $discountFlag): GoodDetails
    {
        $this->discountFlag = $discountFlag;
        return $this;
    }

    /**
     * @param string $deemedFlag
     * @return GoodDetails
     */
    public function deemedFlag(string $deemedFlag): GoodDetails
    {
        $this->deemedFlag = $deemedFlag;
        return $this;
    }

    /**
     * @param string $exciseFlag
     * @return GoodDetails
     */
    public function exciseFlag(string $exciseFlag): GoodDetails
    {
        $this->exciseFlag = $exciseFlag;
        return $this;
    }

    /**
     * @param string $goodsCategoryId
     * @return GoodDetails
     */
    public function goodsCategoryId(string $goodsCategoryId): GoodDetails
    {
        $this->goodsCategoryId = $goodsCategoryId;
        return $this;
    }


}