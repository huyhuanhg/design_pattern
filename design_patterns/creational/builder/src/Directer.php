<?php

namespace DesignPatterns\Creational\Builder;

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