<?php

namespace Sniper\EfrisLib\Product;

class StockTransfer
{
    public function __construct(
        public string $sourceBranchId,
        public string $destinationBranchId,
        public string $transferTypeCode,
        public ?string $remarks=null,
        public ?string $rollBackIfError='1',
        public ?string $tankId=null,
        public ?string $goodsTypeCode='101',
    )
    {
    }
}