<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function setData($mode, $content);
}