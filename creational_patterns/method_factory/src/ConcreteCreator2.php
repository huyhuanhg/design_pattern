<?php

namespace DesignPattern\CreationalPattern\FactoryMethod;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}
