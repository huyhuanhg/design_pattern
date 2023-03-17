<?php

use DesignPatterns\Behavioral\Strategy\StrategyTest;

require_once '../../core/index.php';

StrategyTest::testIdComparator(StrategyTest::provideIntegers());
StrategyTest::testDateComparator(StrategyTest::provideDates());
