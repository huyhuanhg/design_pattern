<?php

use DesignPatterns\Creational\FactoryMethod\Creator;

require_once '../../core/index.php';

$creator = new Creator();

writeln($creator->product1()->operation());

writeln($creator->product2()->operation());
