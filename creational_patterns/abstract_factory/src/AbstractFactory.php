<?php

namespace DesignPattern\CreationalPattern\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function setData($mode, $content);
}