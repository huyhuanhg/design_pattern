<?php

namespace DesignPattern\Creational\FactoryMethod;

/**
 * Concrete Products provide various implementations of the Product interface.
 */
class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "<b>{Result of the ConcreteProduct2}</b>";
    }
}
