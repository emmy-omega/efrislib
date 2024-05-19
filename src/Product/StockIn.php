<?php

namespace Sniper\EfrisLib\Product;

use Sniper\EfrisLib\Builder;

class StockIn
{
    public function __construct(
        public string  $operationType,
        public ?string $supplierTin=null,
        public ?string $supplierName=null,
        public ?string $adjustType=null,
        public ?string $remarks=null,
        public ?string $stockInDate=null,
        public ?string $stockInType=null,
        public ?string $productionBatchNo=null,
        public ?string $productionDate=null,
        public ?string $branchId=null,
        public ?string $invoiceNo=null,
        public ?string $isCheckBatchNo = null,
        public ?string $rollBackIfError = null,
        public ?string $goodsTypeCode = null)
    {
    }
}