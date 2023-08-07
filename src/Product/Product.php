<?php

namespace Sniper\EfrisLib\Product;

class Product
{
    public string $operationType = "101";
    public string $goodsName;
    public string $goodsCode;
    public string $measureUnit;
    public string $unitPrice;
    public string $currency;
    public string $commodityCategoryId;
    public string $haveExciseTax = "102";
    public string $description;
    public string $stockPrewarning;
    public string $pieceMeasureUnit;
    public string $havePieceUnit = "102";
    public string $pieceUnitPrice;
    public string $packageScaledValue;
    public string $pieceScaledValue;
    public string $exciseDutyCode;
    public string $haveOtherUnit = "102";
    public string $goodsTypeCode = "101";

    /**
     * @var $goodsOtherUnits array<GoodsOtherUnit>
     */
    public array $goodsOtherUnits;

    public static function build(): Product
    {
        return new self();
    }

    public function __construct()
    {
    }

    /**
     * @param string $operationType
     * @return Product
     */
    public function operationType(string $operationType): Product
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @param string $goodsName
     * @return Product
     */
    public function goodsName(string $goodsName): Product
    {
        $this->goodsName = $goodsName;
        return $this;
    }

    /**
     * @param string $goodsCode
     * @return Product
     */
    public function goodsCode(string $goodsCode): Product
    {
        $this->goodsCode = $goodsCode;
        return $this;
    }

    /**
     * @param string $measureUnit
     * @return Product
     */
    public function measureUnit(string $measureUnit): Product
    {
        $this->measureUnit = $measureUnit;
        return $this;
    }

    /**
     * @param string $unitPrice
     * @return Product
     */
    public function unitPrice(string $unitPrice): Product
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @param string $currency
     * @return Product
     */
    public function currency(string $currency): Product
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param string $commodityCategoryId
     * @return Product
     */
    public function commodityCategoryId(string $commodityCategoryId): Product
    {
        $this->commodityCategoryId = $commodityCategoryId;
        return $this;
    }

    /**
     * @param string $haveExciseTax
     * @return Product
     */
    public function haveExciseTax(string $haveExciseTax): Product
    {
        $this->haveExciseTax = $haveExciseTax;
        return $this;
    }

    /**
     * @param string $description
     * @return Product
     */
    public function description(string $description): Product
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $stockPrewarning
     * @return Product
     */
    public function stockPrewarning(string $stockPrewarning): Product
    {
        $this->stockPrewarning = $stockPrewarning;
        return $this;
    }

    /**
     * @param string $pieceMeasureUnit
     * @return Product
     */
    public function pieceMeasureUnit(string $pieceMeasureUnit): Product
    {
        $this->pieceMeasureUnit = $pieceMeasureUnit;
        return $this;
    }

    /**
     * @param string $havePieceUnit
     * @return Product
     */
    public function havePieceUnit(string $havePieceUnit): Product
    {
        $this->havePieceUnit = $havePieceUnit;
        return $this;
    }

    /**
     * @param string $pieceUnitPrice
     * @return Product
     */
    public function pieceUnitPrice(string $pieceUnitPrice): Product
    {
        $this->pieceUnitPrice = $pieceUnitPrice;
        return $this;
    }

    /**
     * @param string $packageScaledValue
     * @return Product
     */
    public function packageScaledValue(string $packageScaledValue): Product
    {
        $this->packageScaledValue = $packageScaledValue;
        return $this;
    }

    /**
     * @param string $pieceScaledValue
     * @return Product
     */
    public function pieceScaledValue(string $pieceScaledValue): Product
    {
        $this->pieceScaledValue = $pieceScaledValue;
        return $this;
    }

    /**
     * @param string $exciseDutyCode
     * @return Product
     */
    public function exciseDutyCode(string $exciseDutyCode): Product
    {
        $this->exciseDutyCode = $exciseDutyCode;
        return $this;
    }

    /**
     * @param string $haveOtherUnit
     * @return Product
     */
    public function haveOtherUnit(string $haveOtherUnit): Product
    {
        $this->haveOtherUnit = $haveOtherUnit;
        return $this;
    }

    /**
     * @param string $goodsTypeCode
     * @return Product
     */
    public function goodsTypeCode(string $goodsTypeCode): Product
    {
        $this->goodsTypeCode = $goodsTypeCode;
        return $this;
    }

    /**
     * @param array $goodsOtherUnits
     * @return Product
     */
    public function goodsOtherUnits(array $goodsOtherUnits): Product
    {
        $this->goodsOtherUnits = $goodsOtherUnits;
        return $this;
    }



}