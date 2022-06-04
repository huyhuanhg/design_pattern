<?php

include_once '../../helper/index.php';

class Directer
{
    public function build(BuilderInterFace $build)
    {
        $build->createVehicle();
        $build->addDoors();
        $build->addEngine();
        $build->addWheel();
        return $build->getVehicle();
    }
}

interface BuilderInterFace
{
    public function createVehicle();
    public function addWheel();
    public function addEngine();
    public function addDoors();
    public function getVehicle();
}

class TruckBuilder implements BuilderInterFace
{
    /**
     * @var Object
     */
    private $truck;
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('lefttDoor', new Door());
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

class CarBuilder implements BuilderInterFace
{
    /**
     * @var Object
     */
    private $car;
    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('lefttDoor', new Door());
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

abstract class Vehicle{
    /**
     * @var [object]
     */
    private $data = [];
    /**
     * Set Data
     * @param string $key
     * @param object $val
     */
    public function setPart($key, $val)
    {
        $this->data[$key] = $val;
    }
    public function getPart()
    {
        return $this->data;
    }
}

class Truck extends Vehicle
{
    //code
}

class Car extends Vehicle
{
    //code
}

class Door
{
    //code
}

class Engine
{
    //code
}

class Wheel
{
    //code
}

//Khởi tạo
$car = new CarBuilder();
$object1 = (new Directer())->build($car);
dump($object1);

//Khởi tạo
$truck = new TruckBuilder();
$object2 = (new Directer())->build($truck);
dump($object2);

