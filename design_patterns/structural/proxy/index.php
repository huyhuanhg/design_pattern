<?php

use DesignPatterns\Structural\Proxy\ProxyTest;

require_once '../../../core/index.php';

ProxyTest::testProxyWillOnlyExecuteExpensiveGetBalanceOnce();
