<?php

namespace DesignPattern\Creational\Builder;

interface BuilderInterFace
{
    public function createVehicle();
    public function addWheel();
    public function addEngine();
    public function addDoors();
    public function getVehicle();
}
