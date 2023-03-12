<?php

use DesignPattern\Structural\Proxy\ProxyTest;

require_once '../../../core/index.php';

ProxyTest::testProxyWillOnlyExecuteExpensiveGetBalanceOnce();
