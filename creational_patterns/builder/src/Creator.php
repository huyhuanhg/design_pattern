<?php

namespace DesignPattern\CreationalPattern\Builder;

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
