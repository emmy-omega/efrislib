<?php

namespace Sniper\EfrisLib\Response;

use Sniper\EfrisLib\Product\ProductUpload;

class PartialProductUpload extends ProductUpload
{
    public string $returnCode;
    public string $returnMessage;

}