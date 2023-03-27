<?php

namespace payload;

class Payload
{
    public function __construct(private Data $data, private GlobalInfo $globalInfo,
                                private ReturnStateInfo  $returnStateInfo)
    {
    }

    /**
     * @return Data
     */
    public function getData(): Data
    {
        return $this->data;
    }

    /**
     * @param Data $data
     * @return Payload
     */
    public function setData(Data $data): Payload
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return GlobalInfo
     */
    public function getGlobalInfo(): GlobalInfo
    {
        return $this->globalInfo;
    }

    /**
     * @param GlobalInfo $globalInfo
     * @return Payload
     */
    public function setGlobalInfo(GlobalInfo $globalInfo): Payload
    {
        $this->globalInfo = $globalInfo;
        return $this;
    }

    /**
     * @return ReturnStateInfo
     */
    public function getReturnStateInfo(): ReturnStateInfo
    {
        return $this->returnStateInfo;
    }

    /**
     * @param ReturnStateInfo $returnStateInfo
     * @return Payload
     */
    public function setReturnStateInfo(ReturnStateInfo $returnStateInfo): Payload
    {
        $this->returnStateInfo = $returnStateInfo;
        return $this;
    }

}