<?php

use DesignPatterns\Structural\DataMapper\DataMapperTest;

require_once '../../../core/index.php';

DataMapperTest::testCanMapUserFromStorage();

DataMapperTest::testWillNotMapInvalidData();
