<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Creator
{
    public function product1()
    {
        return (new ConcreteCreator1())->factoryMethod();
    }

    public function product2()
    {
        return (new ConcreteCreator2())->factoryMethod();
    }
}
