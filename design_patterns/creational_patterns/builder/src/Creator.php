<?php

namespace DesignPattern\Creational\Builder;

class Creator
{
    public static function car()
    {
        return (new Directer())->build(new CarBuilder());
    }
    public static function truck()
    {
        return (new Directer())->build(new TruckBuilder());
    }
}
