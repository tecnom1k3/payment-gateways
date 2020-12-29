<?php


namespace Digitec\Contracts;


/**
 * Interface Arrayable
 * @package Digitec\Contracts
 */
interface Arrayable
{
    /**
     * @return array
     */
    public function toArray(): array;
}
