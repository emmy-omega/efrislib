<?php

namespace Sniper\EfrisLib\Product;

class Product
{
    public function __construct(
        public string $goodsName,
        public string $goodsCode,
        public string $measureUnit,
        public string $currency,
        public string $commodityCategoryId,
        public ?string $unitPrice=null,
        public ?string $description=null,
        public ?string $stockPrewarning=null,
        public ?string $pieceMeasureUnit=null,
        public ?string $pieceUnitPrice=null,
        public ?string $packageScaledValue=null,
        public ?string $pieceScaledValue=null,
        public ?string $exciseDutyCode=null,
        public array  $goodsOtherUnits = [],
        public string $operationType = "101",
        public string $haveOtherUnit = "102",
        public string $goodsTypeCode = "101",
        public string $haveExciseTax = "102",
        public string $havePieceUnit = "102",
    )
    {}

}