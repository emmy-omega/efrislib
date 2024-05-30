<?php

namespace Sniper\EfrisLib\Product;

class StockTransfer
{
    public function __construct(
        public string $sourceBranchId,
        public string $destinationBranchId,
        public string $transferTypeCode,
        public ?string $remarks=null,
        public ?string $rollBackIfError=null,
        public ?string $tankId=null,
        public ?string $goodsTypeCode=null,
    )
    {
    }
}