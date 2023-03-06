<?php

use DesignPattern\Creational\Singleton\Singleton;

require_once '../../../core/index.php';

/**
 * Normal Class
 */
class Normal {

}

$singleton1 = Singleton::instance();

$singleton2 = Singleton::instance();

$normal1 = new Normal();

$normal2 = new Normal();

dump($singleton1);

dump($singleton2);

dump($normal1);

dump($normal2);
