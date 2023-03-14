<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Concrete Products provide various implementations of the Product interface.
 */
class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "<b>{Result of the ConcreteProduct1}</b>";
    }
}
