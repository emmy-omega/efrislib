<?php

namespace Sniper\EfrisLib;


class Builder
{
    /**
     * @return Builder
     */
    public static function build(): self
    {
        return new self();
    }

}