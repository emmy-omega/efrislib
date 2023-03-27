<?php

namespace invoicing;
class GoodDetails
{
    private string $qty;
    private string $unitOfMeasure;
    private string $unitPrice;
    private string $discountTaxRate;
    private string $categoryId;
    private string $categoryName;
    private string $goodsCategoryName;
    private string $exciseRate;
    private string $exciseRule;
    private string $exciseTax;
    private string $pack;
    private string $pick;
    private string $exciseUnit;
    private string $exciseCurrency;
    private string $exciseRateName;
    private string $vatApplicableFlag;

    public function __construct(private string $item, private string $itemCode, private string $total,
                                private string $taxRate, private string $tax, private string $orderNumber,
                                private string $discountFlag, private string $deemedFlag, private string $exciseFlag,
                                private string $goodsCategoryId)
    {
    }

    /**
     * @return string
     */
    public function getQty(): string
    {
        return $this->qty;
    }

    /**
     * @param string $qty
     * @return GoodDetails
     */
    public function setQty(string $qty): GoodDetails
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure(): string
    {
        return $this->unitOfMeasure;
    }

    /**
     * @param string $unitOfMeasure
     * @return GoodDetails
     */
    public function setUnitOfMeasure(string $unitOfMeasure): GoodDetails
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitPrice(): string
    {
        return $this->unitPrice;
    }

    /**
     * @param string $unitPrice
     * @return GoodDetails
     */
    public function setUnitPrice(string $unitPrice): GoodDetails
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountTaxRate(): string
    {
        return $this->discountTaxRate;
    }

    /**
     * @param string $discountTaxRate
     * @return GoodDetails
     */
    public function setDiscountTaxRate(string $discountTaxRate): GoodDetails
    {
        $this->discountTaxRate = $discountTaxRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    /**
     * @param string $categoryId
     * @return GoodDetails
     */
    public function setCategoryId(string $categoryId): GoodDetails
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return GoodDetails
     */
    public function setCategoryName(string $categoryName): GoodDetails
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCategoryName(): string
    {
        return $this->goodsCategoryName;
    }

    /**
     * @param string $goodsCategoryName
     * @return GoodDetails
     */
    public function setGoodsCategoryName(string $goodsCategoryName): GoodDetails
    {
        $this->goodsCategoryName = $goodsCategoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getExciseRate(): string
    {
        return $this->exciseRate;
    }

    /**
     * @param string $exciseRate
     * @return GoodDetails
     */
    public function setExciseRate(string $exciseRate): GoodDetails
    {
        $this->exciseRate = $exciseRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExciseRule(): string
    {
        return $this->exciseRule;
    }

    /**
     * @param string $exciseRule
     * @return GoodDetails
     */
    public function setExciseRule(string $exciseRule): GoodDetails
    {
        $this->exciseRule = $exciseRule;
        return $this;
    }

    /**
     * @return string
     */
    public function getExciseTax(): string
    {
        return $this->exciseTax;
    }

    /**
     * @param string $exciseTax
     * @return GoodDetails
     */
    public function setExciseTax(string $exciseTax): GoodDetails
    {
        $this->exciseTax = $exciseTax;
        return $this;
    }

    /**
     * @return string
     */
    public function getPack(): string
    {
        return $this->pack;
    }

    /**
     * @param string $pack
     * @return GoodDetails
     */
    public function setPack(string $pack): GoodDetails
    {
        $this->pack = $pack;
        return $this;
    }

    /**
     * @return string
     */
    public function getPick(): string
    {
        return $this->pick;
    }

    /**
     * @param string $pick
     * @return GoodDetails
     */
    public function setPick(string $pick): GoodDetails
    {
        $this->pick = $pick;
        return $this;
    }

    /**
     * @return string
     */
    public function getExciseUnit(): string
    {
        return $this->exciseUnit;
    }

    /**
     * @param string $exciseUnit
     * @return GoodDetails
     */
    public function setExciseUnit(string $exciseUnit): GoodDetails
    {
        $this->exciseUnit = $exciseUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getExciseCurrency(): string
    {
        return $this->exciseCurrency;
    }

    /**
     * @param string $exciseCurrency
     * @return GoodDetails
     */
    public function setExciseCurrency(string $exciseCurrency): GoodDetails
    {
        $this->exciseCurrency = $exciseCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getExciseRateName(): string
    {
        return $this->exciseRateName;
    }

    /**
     * @param string $exciseRateName
     * @return GoodDetails
     */
    public function setExciseRateName(string $exciseRateName): GoodDetails
    {
        $this->exciseRateName = $exciseRateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatApplicableFlag(): string
    {
        return $this->vatApplicableFlag;
    }

    /**
     * @param string $vatApplicableFlag
     * @return GoodDetails
     */
    public function setVatApplicableFlag(string $vatApplicableFlag): GoodDetails
    {
        $this->vatApplicableFlag = $vatApplicableFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->item;
    }

    /**
     * @param string $item
     * @return GoodDetails
     */
    public function setItem(string $item): GoodDetails
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemCode(): string
    {
        return $this->itemCode;
    }

    /**
     * @param string $itemCode
     * @return GoodDetails
     */
    public function setItemCode(string $itemCode): GoodDetails
    {
        $this->itemCode = $itemCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTotal(): string
    {
        return $this->total;
    }

    /**
     * @param string $total
     * @return GoodDetails
     */
    public function setTotal(string $total): GoodDetails
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxRate(): string
    {
        return $this->taxRate;
    }

    /**
     * @param string $taxRate
     * @return GoodDetails
     */
    public function setTaxRate(string $taxRate): GoodDetails
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTax(): string
    {
        return $this->tax;
    }

    /**
     * @param string $tax
     * @return GoodDetails
     */
    public function setTax(string $tax): GoodDetails
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return GoodDetails
     */
    public function setOrderNumber(string $orderNumber): GoodDetails
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountFlag(): string
    {
        return $this->discountFlag;
    }

    /**
     * @param string $discountFlag
     * @return GoodDetails
     */
    public function setDiscountFlag(string $discountFlag): GoodDetails
    {
        $this->discountFlag = $discountFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeemedFlag(): string
    {
        return $this->deemedFlag;
    }

    /**
     * @param string $deemedFlag
     * @return GoodDetails
     */
    public function setDeemedFlag(string $deemedFlag): GoodDetails
    {
        $this->deemedFlag = $deemedFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getExciseFlag(): string
    {
        return $this->exciseFlag;
    }

    /**
     * @param string $exciseFlag
     * @return GoodDetails
     */
    public function setExciseFlag(string $exciseFlag): GoodDetails
    {
        $this->exciseFlag = $exciseFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCategoryId(): string
    {
        return $this->goodsCategoryId;
    }

    /**
     * @param string $goodsCategoryId
     * @return GoodDetails
     */
    public function setGoodsCategoryId(string $goodsCategoryId): GoodDetails
    {
        $this->goodsCategoryId = $goodsCategoryId;
        return $this;
    }


}