<?php

namespace traaittCASH\Contracts;

interface Arrayable
{
    /**
     * Convert the object to its array representation.
     *
     * @return array
     */
    public function toArray();
}