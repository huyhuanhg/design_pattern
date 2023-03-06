<?php

namespace DesignPattern\Creational\AbstractFactory;

abstract class FormatAbstract
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}
