<?php

namespace DesignPattern\Creational\Builder;

abstract class Vehicle
{
    /**
     * @var [object]
     */
    private $data = [];
    /**
     * Set Data
     * @param string $key
     * @param object $val
     */
    public function setPart($key, $val)
    {
        $this->data[$key] = $val;
    }
    public function getPart()
    {
        return $this->data;
    }
}
