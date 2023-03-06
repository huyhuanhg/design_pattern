<?php

namespace DesignPattern\Creational\Builder;

class TruckBuilder implements BuilderInterFace
{
    /**
     * @var Object
     */
    private $truck;
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine);
    }
    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());

    }
    public function createVehicle()
    {
        $this->truck = new Truck();
    }
    public function getVehicle()
    {
        return $this->truck;
    }
}
