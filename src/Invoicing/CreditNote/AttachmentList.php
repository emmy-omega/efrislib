<?php

namespace Sniper\EfrisLib\Invoicing\CreditNote;

use Sniper\EfrisLib\Misc\TaxpayerInfo;

class AttachmentList
{
    public string $fileName;
    public string $fileType;
    public string $fileContent;

    public static function builder(): AttachmentList
    {
        return new self();
    }

    /**
     * @param string $fileName
     * @return AttachmentList
     */
    public function fileName(string $fileName): AttachmentList
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @param string $fileType
     * @return AttachmentList
     */
    public function fileType(string $fileType): AttachmentList
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @param string $fileContent
     * @return AttachmentList
     */
    public function fileContent(string $fileContent): AttachmentList
    {
        $this->fileContent = $fileContent;
        return $this;
    }


}