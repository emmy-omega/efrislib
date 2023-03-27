<?php

namespace payload;

class ExtendField
{
    private string $responseDateFormat = "dd/MM/yyyy";
    private string $responseTimeFormat = "dd/MM/yyyy HH:mm:ss";

    /**
     * @return string
     */
    public function getResponseDateFormat(): string
    {
        return $this->responseDateFormat;
    }

    /**
     * @param string $responseDateFormat
     * @return ExtendField
     */
    public function setResponseDateFormat(string $responseDateFormat): ExtendField
    {
        $this->responseDateFormat = $responseDateFormat;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseTimeFormat(): string
    {
        return $this->responseTimeFormat;
    }

    /**
     * @param string $responseTimeFormat
     * @return ExtendField
     */
    public function setResponseTimeFormat(string $responseTimeFormat): ExtendField
    {
        $this->responseTimeFormat = $responseTimeFormat;
        return $this;
    }
}