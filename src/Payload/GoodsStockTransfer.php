<?php

namespace Sniper\EfrisLib\Payload;

use Sniper\EfrisLib\Invoicing\CreditNote\AttachmentList;
use Sniper\EfrisLib\Product\StockTransfer;

class GoodsStockTransfer
{
    /**
     * @param StockTransfer $stockTransfer
     * @param array $stockTransferItem
     */

    public function __construct(
        public StockTransfer $stockTransfer,
        /**
         * @var array<AttachmentList>
         */
        public array $stockTransferItem = array()
    )
    {
    }
}