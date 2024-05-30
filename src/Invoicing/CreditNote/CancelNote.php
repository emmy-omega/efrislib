<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

class CancelNote
{
    public function __construct(
    public string $oriInvoiceId,
    public string $invoiceNo,
    public string $reasonCode,
    public string $invoiceApplyCategoryCode='104',
    public ?string $reason=null,
    public array $attachmentList = array())
    {}

}