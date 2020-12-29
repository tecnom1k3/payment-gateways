<?php


namespace Digitec\Conekta\Dto;


abstract class AList
{

    /**
     * @var int
     */
    protected int $total;

    /**
     * @var bool
     */
    protected bool $hasMore;

    /**
     * @var string
     */
    protected string $object;

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return AList
     */
    public function setTotal(int $total): AList
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasMore(): bool
    {
        return $this->hasMore;
    }

    /**
     * @param bool $hasMore
     * @return AList
     */
    public function setHasMore(bool $hasMore): AList
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return AList
     */
    public function setObject(string $object): AList
    {
        $this->object = $object;
        return $this;
    }


}
