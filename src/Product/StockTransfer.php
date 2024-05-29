<?php

namespace Sniper\EfrisLib\Product;

class StockTransfer
{
    public function __construct(
        public int $sourceBranchId,
        public int $destinationBranchId,
        public string $transferTypeCode,
        public string $remarks,
        public string $rollBackIfError,
        public string $goodsTypeCode,
    )
    {
    }
}