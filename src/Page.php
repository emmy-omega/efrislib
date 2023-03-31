<?php

namespace Sniper\EfrisLib;

class Page
{
    public int $pageNo;
    public int $pageSize;
    public int $totalSize;
    public int $pageCount;

    public static function build(): self
    {
        return new self();
    }

    /**
     * @param string $pageNo
     * @return Page
     */
    public function pageNo(string $pageNo): Page
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @param string $pageSize
     * @return Page
     */
    public function pageSize(string $pageSize): Page
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @param string $totalSize
     * @return Page
     */
    public function totalSize(string $totalSize): Page
    {
        $this->totalSize = $totalSize;
        return $this;
    }

    /**
     * @param string $pageCount
     * @return Page
     */
    public function pageCount(string $pageCount): Page
    {
        $this->pageCount = $pageCount;
        return $this;
    }


}