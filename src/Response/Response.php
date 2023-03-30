<?php

namespace Sniper\EfrisLib\Response;

use Sniper\EfrisLib\Payload\ReturnStateInfo;

class Response
{
    public function __construct(public ReturnStateInfo $returnStateInfo, public mixed $data)
    {
    }
}