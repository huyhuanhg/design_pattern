<?php

namespace DesignPattern\Creational\FactoryMethod;

/**
 * The Creator class declares the factory method that is supposed to return an
 * object of a Product class. The Creator's subclasses usually provide the
 * implementation of this method.
 */
abstract class Factory
{
    /**
     * Note that the Creator may also provide some default implementation of the
     * factory method.
     */
    abstract public function factoryMethod(): Product;
}
