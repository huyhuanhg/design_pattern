<?php

use DesignPatterns\More\ServiceLocator\ServiceLocator;
use DesignPatterns\More\ServiceLocator\ServiceLocatorTest;

require_once '../../core/index.php';

(new ServiceLocatorTest(new ServiceLocator()))->testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet();
(new ServiceLocatorTest(new ServiceLocator()))->testHasServices();
