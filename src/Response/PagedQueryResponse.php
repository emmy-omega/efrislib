<?php

namespace Sniper\EfrisLib\Response;

use Sniper\EfrisLib\Misc\Taxpayer;
use Sniper\EfrisLib\Page;

class PagedQueryResponse
{
    public Page $page;
    public array $records;
}