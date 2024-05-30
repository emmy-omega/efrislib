<?php

namespace Sniper\EfrisLib\Payload;

use Sniper\EfrisLib\Invoicing\CreditNote\AttachmentList;
use Sniper\EfrisLib\Product\StockTransfer;
use Sniper\EfrisLib\Product\StockTransferItem;

class GoodsStockTransfer
{
    /**
     * @param StockTransfer $goodsStockTransfer
     * @param array<StockTransferItem> $goodsStockTransferItem
     */

    public function __construct(
        public StockTransfer $goodsStockTransfer,
        /**
         * @var array<StockTransferItem>
         */
        public array $goodsStockTransferItem = array()
    )
    {
    }

    /**
     * @var array<StockTransferItem> $stockTransferItems
     */
    public function addStockTransferItems(array $stockTransferItems): void
    {
            array_push($this->goodsStockTransferItem, ...$stockTransferItems);
    }
}