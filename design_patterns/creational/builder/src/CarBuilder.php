<?php

namespace DesignPatterns\Creational\Builder;

class CarBuilder implements BuilderInterFace
{
    /**
     * @var Object
     */
    private $car;
    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }
    public function addEngine()
    {
        $this->car->setPart('Engine', new Engine);
    }
    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }
    public function createVehicle()
    {
        $this->car = new Car();
    }
    public function getVehicle()
    {
        return $this->car;
    }
}
