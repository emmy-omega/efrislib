<?php

namespace Sniper\EfrisLib\Payload;


use Sniper\EfrisLib\Crypto;

class Data
{
    public string $signature = "";
    public string $content = "";
    public DataDescription $dataDescription;
    public function __construct()
    {
        $this->dataDescription = new DataDescription();
    }

    public static function builder(): Data
    {
        return new self();
    }

    /**
     * @param string $content
     * @return $this
     */
    public function content(string $content): Data
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param string $signature
     * @return $this
     */
    public function signature(string $signature): Data
    {
        $this->signature = $signature;
        return $this;
    }
    public function dataDescription(DataDescription $dataDescription): Data
    {
        $this->dataDescription = $dataDescription;
        return $this;
    }


    public function sign(): Data
    {
        $signed = Crypto::rsaSign($this->content);
        if ($signed)
            $this->signature=base64_encode($signed);
        return $this;
    }

    /**
     * @param string $aesKey
     * @return $this
     */
    public function encrypt(string $aesKey): Data
    {
        $this->content = Crypto::aesEncrypt($this->content, $aesKey);
        return $this;
    }

    public function decrypt(string $aesKey): Data
    {
        $this->content = Crypto::aesDecrypt($this->content, $aesKey);
        return $this;
    }

}