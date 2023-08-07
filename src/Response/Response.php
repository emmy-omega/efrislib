<?php

namespace Sniper\EfrisLib\Response;

use Sniper\EfrisLib\Payload\ReturnStateInfo;

class Response
{
    public mixed $data;
    public ReturnStateInfo $returnStateInfo;

    public function __construct()
    {
        $this->returnStateInfo = new ReturnStateInfo();
    }

    public static function builder(): Response
    {
        return new self();
    }

    /**
     * @param mixed $data
     * @return Response
     */
    public function data(mixed $data): Response
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param ReturnStateInfo $returnStateInfo
     * @return Response
     */
    public function returnStateInfo(ReturnStateInfo $returnStateInfo): Response
    {
        $this->returnStateInfo = $returnStateInfo;
        return $this;
    }
}