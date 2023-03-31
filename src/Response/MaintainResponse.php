<?php

namespace Sniper\EfrisLib\Response;

use Sniper\EfrisLib\Product\StockInItem;

class MaintainResponse extends StockInItem
{
    public string $returnCode;
    public string $returnMessage;
}