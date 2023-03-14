<?php

use DesignPatterns\Structural\Registry\RegistryTest;

require_once '../../core/index.php';

RegistryTest::setup()->testSetAndGetLogger();
RegistryTest::setup()->testThrowsExceptionWhenTryingToSetInvalidKey();
RegistryTest::setup()->testThrowsExceptionWhenTryingToGetNotSetKey();
