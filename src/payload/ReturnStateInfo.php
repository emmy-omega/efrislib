<?php

namespace payload;

class ReturnStateInfo
{
    private string $returnCode;
    private string $returnMessage;

    /**
     * @return string
     */
    public function getReturnCode(): string
    {
        return $this->returnCode;
    }

    /**
     * @param string $returnCode
     * @return ReturnStateInfo
     */
    public function setReturnCode(string $returnCode): ReturnStateInfo
    {
        $this->returnCode = $returnCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnMessage(): string
    {
        return $this->returnMessage;
    }

    /**
     * @param string $returnMessage
     * @return ReturnStateInfo
     */
    public function setReturnMessage(string $returnMessage): ReturnStateInfo
    {
        $this->returnMessage = $returnMessage;
        return $this;
    }
}