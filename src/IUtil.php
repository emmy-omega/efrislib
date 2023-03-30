<?php

namespace Sniper\EfrisLib;

use Sniper\EfrisLib\Payload\Payload;

/**
 * @template T
 */
interface IUtil
{
    /**
     * @param Payload $payload
     * @return T
     */
    public static function send(Payload $payload);
}