<?php

namespace payload;

class Data
{
    private string $content = "";

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Data
     */
    public function setContent(string $content): Data
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return Data
     */
    public function setSignature(string $signature): Data
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return DataDescription
     */
    public function getDataDescription(): DataDescription
    {
        return $this->dataDescription;
    }

    /**
     * @param DataDescription $dataDescription
     * @return Data
     */
    public function setDataDescription(DataDescription $dataDescription): Data
    {
        $this->dataDescription = $dataDescription;
        return $this;
    }
    private string $signature = "";
    private DataDescription $dataDescription;

    public function __construct(string $content, string $codeType = "0", string $encryptCode  = "1") {
        $this->dataDescription = new DataDescription();
    }
}