<?php

namespace Sniper\EfrisLib\Invoicing;

use Sniper\EfrisLib\Misc\TaxpayerInfo;

class ImportServiceSeller
{
    public string $importBusinessAddress;
    public string $importEmailAddress;
    public string $importContactNumber;
    public string $importAddress;
    public string $importInvoiceDate;
    public string $importAttachmentName;
    public string $importAttachmentContent;

    public static function builder(): ImportServiceSeller
    {
        return new self();
    }

    /**
     * @param string $importBusinessAddress
     * @return ImportServiceSeller
     */
    public function importBusinessAddress(string $importBusinessAddress): ImportServiceSeller
    {
        $this->importBusinessAddress = $importBusinessAddress;
        return $this;
    }

    /**
     * @param string $importEmailAddress
     * @return ImportServiceSeller
     */
    public function importEmailAddress(string $importEmailAddress): ImportServiceSeller
    {
        $this->importEmailAddress = $importEmailAddress;
        return $this;
    }

    /**
     * @param string $importContactNumber
     * @return ImportServiceSeller
     */
    public function importContactNumber(string $importContactNumber): ImportServiceSeller
    {
        $this->importContactNumber = $importContactNumber;
        return $this;
    }

    /**
     * @param string $importAddress
     * @return ImportServiceSeller
     */
    public function importAddress(string $importAddress): ImportServiceSeller
    {
        $this->importAddress = $importAddress;
        return $this;
    }

    /**
     * @param string $importInvoiceDate
     * @return ImportServiceSeller
     */
    public function importInvoiceDate(string $importInvoiceDate): ImportServiceSeller
    {
        $this->importInvoiceDate = $importInvoiceDate;
        return $this;
    }

    /**
     * @param string $importAttachmentName
     * @return ImportServiceSeller
     */
    public function importAttachmentName(string $importAttachmentName): ImportServiceSeller
    {
        $this->importAttachmentName = $importAttachmentName;
        return $this;
    }

    /**
     * @param string $importAttachmentContent
     * @return ImportServiceSeller
     */
    public function importAttachmentContent(string $importAttachmentContent): ImportServiceSeller
    {
        $this->importAttachmentContent = $importAttachmentContent;
        return $this;
    }


}