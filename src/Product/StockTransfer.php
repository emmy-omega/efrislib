<?php

namespace Sniper\EfrisLib\Product;

class StockTransfer
{
    public function __construct(
        public string $sourceBranchId,
        public string $destinationBranchId,
        public string $transferTypeCode,
        public ?string $remarks,
        public ?string $rollBackIfError,
        public ?string $tankId,
        public ?string $goodsTypeCode,
    )
    {
    }
}