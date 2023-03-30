<?php

namespace Sniper\EfrisLib\Response;

use Sniper\EfrisLib\Product\ProductUpload;

class ProductPartialUpload extends ProductUpload
{
    public string $returnCode;
    public string $returnMessage;
}