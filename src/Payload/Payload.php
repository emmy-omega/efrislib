<?php

namespace Sniper\EfrisLib\Payload;

use Sniper\EfrisLib\Builder;
use Sniper\EfrisLib\Crypto;

/**
 * @template T of Payload
 */
class Payload extends Builder
{
    public ReturnStateInfo $returnStateInfo;
    public Data $data;
    public GlobalInfo $globalInfo;
    public function __construct()
    {
        $this->returnStateInfo = new ReturnStateInfo();
        $this->data = new Data();
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


    public static function build(): Payload
    {
        return new self();
    }

    /**
     * @param string $aesKey
     * @return $this
     */
    public function encrypt(string $aesKey): Payload
    {
        $this->data->content = Crypto::aesEncrypt($this->data->content, $aesKey);
        return $this;
    }

    public function decrypt(string $aesKey): Payload
    {
        $this->data->content = Crypto::aesDecrypt($this->data->content, $aesKey);
        return $this;
    }
}