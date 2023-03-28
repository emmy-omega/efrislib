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
    public string $haveOtherUnit;
    public string $goodsTypeCode = "101";
    public array $goodsOtherUnits;
}