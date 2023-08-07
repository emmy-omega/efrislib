<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

class CancelNote
{
    public string $oriInvoiceId;
    public string $invoiceNo;
    public string $reason;
    public string $reasonCode;
    public string $invoiceApplyCategoryCode;
    /**
     * @var array<AttachmentList>
     */
    public array $attachmentList;
}