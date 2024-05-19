<?php

namespace Sniper\EfrisLib\Product;

class ProductQuery
{
    public function __construct(
    public ?string $goodsCode = null,
    public ?string $goodsName = null,
    public ?string $commodityCategoryName = null,
    public ?string $branchId = null,
    public ?string $serviceMark = null,
    public ?string $haveExciseTax = null,
    public ?string $startDate = null,
    public ?string $endDate = null,
    public ?string $combineKeywords=null,
    public ?string $goodsTypeCode = "101",
    public string $pageNo = "1",
    public string $pageSize ="10")
    {}

}