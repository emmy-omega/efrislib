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

    public function __construct(public string $item, public string $itemCode, public string $total,
                                public string $taxRate, public string $tax, public string $orderNumber,
                                public string $discountFlag, public string $deemedFlag, public string $exciseFlag,
                                public string $goodsCategoryId)
    {
    }
    
}