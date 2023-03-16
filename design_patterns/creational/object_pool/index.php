<?php

use DesignPatterns\Creational\ObjectPool\PoolTest;

require_once '../../core/index.php';

PoolTest::testCanGetNewInstancesWithGet();
PoolTest::testCanGetSameInstanceTwiceWhenDisposingItFirst();
