<?php

namespace Sniper\EfrisLib\Invoicing;

class Extend
{
    public function __construct (public ?string $reason=null,
    public ?string $reasonCode=null) {}

}