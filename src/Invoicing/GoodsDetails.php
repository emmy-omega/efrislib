<?php

namespace Sniper\EfrisLib\Invoicing;
class GoodsDetails
{
    public function __construct(
        public string $item,
        public string $itemCode,
        public string $total,
        public string $tax,
        public string $goodsCategoryId,
        public string $orderNumber='0',
        public string $exciseFlag='2',
        public string $deemedFlag='2',
        public string $discountFlag='2',
        public ?string $taxRate=null,
        public ?string $qty=null,
        public ?string $unitOfMeasure=null,
        public ?string $unitPrice=null,
        public ?string $discountTaxRate=null,
        public ?string $categoryId=null,
        public ?string $categoryName=null,
        public ?string $goodsCategoryName=null,
        public ?string $exciseRate=null,
        public ?string $exciseRule=null,
        public ?string $exciseTax=null,
        public ?string $pack=null,
        public ?string $pick=null,
        public ?string $exciseUnit=null,
        public ?string $exciseCurrency=null,
        public ?string $exciseRateName=null,
        public ?string $vatApplicableFlag=null)
    {
    }


}