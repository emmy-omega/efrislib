<?php

namespace Sniper\EfrisLib\Payload;

class Payload
{
    public ReturnStateInfo $returnStateInfo;
    public Data $data;
    public GlobalInfo $globalInfo;
    public function __construct()
    {
        $this->returnStateInfo = new ReturnStateInfo();
        $this->data = new Data();
    }

    public static function builder():Payload
    {
        return new self();
    }


    /**
     * @param ReturnStateInfo $returnStateInfo
     * @return Payload
     */
    public function returnStateInfo(ReturnStateInfo $returnStateInfo): Payload
    {
        $this->returnStateInfo = $returnStateInfo;
        return $this;
    }


    /**
     * @param Data $data
     * @return Payload
     */
    public function data(Data $data): Payload
    {
        $this->data = $data;
        return $this;
    }


    /**
     * @param GlobalInfo $globalInfo
     * @return Payload
     */
    public function globalInfo(GlobalInfo $globalInfo): Payload
    {
        $this->globalInfo = $globalInfo;
        return $this;
    }


}