<?php

namespace Sniper\EfrisLib\Misc;

use Exception;
use Sniper\EfrisLib\Response\Response;

class EFRISException extends Exception
{
    public function __construct(public $message, public Response $data)
    {
        parent::__construct($message);
    }
}