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

    public function __construct($oriInvoiceId, $invoiceNo, $reasonCode)
    {
        $this->oriInvoiceId = $oriInvoiceId;
        $this->invoiceNo = $invoiceNo;
        $this->reasonCode = $reasonCode;
    }

    public static function builder($oriInvoiceId, $invoiceNo, $reasonCode): CancelNote
    {
        return new self($oriInvoiceId, $invoiceNo, $reasonCode);
    }

    /**
     * @param string $oriInvoiceId
     * @return CancelNote
     */
    public function oriInvoiceId(string $oriInvoiceId): CancelNote
    {
        $this->oriInvoiceId = $oriInvoiceId;
        return $this;
    }

    /**
     * @param string $invoiceNo
     * @return CancelNote
     */
    public function invoiceNo(string $invoiceNo): CancelNote
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * @param string $reason
     * @return CancelNote
     */
    public function reason(string $reason): CancelNote
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @param string $reasonCode
     * @return CancelNote
     */
    public function reasonCode(string $reasonCode): CancelNote
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * @param string $invoiceApplyCategoryCode
     * @return CancelNote
     */
    public function invoiceApplyCategoryCode(string $invoiceApplyCategoryCode): CancelNote
    {
        $this->invoiceApplyCategoryCode = $invoiceApplyCategoryCode;
        return $this;
    }

    /**
     * @param array $attachmentList
     * @return CancelNote
     */
    public function attachmentList(array $attachmentList): CancelNote
    {
        $this->attachmentList = $attachmentList;
        return $this;
    }


}