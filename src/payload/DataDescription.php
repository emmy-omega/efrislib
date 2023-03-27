<?php

namespace payload;

class DataDescription
{
    private string $codeType = "0";

    /**
     * @return string
     */
    public function getCodeType(): string
    {
        return $this->codeType;
    }

    /**
     * @param string $codeType
     * @return DataDescription
     */
    public function setCodeType(string $codeType): DataDescription
    {
        $this->codeType = $codeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptCode(): string
    {
        return $this->encryptCode;
    }

    /**
     * @param string $encryptCode
     * @return DataDescription
     */
    public function setEncryptCode(string $encryptCode): DataDescription
    {
        $this->encryptCode = $encryptCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return DataDescription
     */
    public function setZipCode(string $zipCode): DataDescription
    {
        $this->zipCode = $zipCode;
        return $this;
    }
    private string $encryptCode = "1";
    private string $zipCode = "0";

}