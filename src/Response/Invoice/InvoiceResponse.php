<?php

namespace Sniper\EfrisLib\Response\Invoice;

use Sniper\EfrisLib\Invoicing\Invoice;
use Sniper\EfrisLib\Misc\TaxpayerInfo;

class InvoiceResponse extends Invoice
{
    public array $existInvoiceList;
    public AgentEntity $agentEntity;
}