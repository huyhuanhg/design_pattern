<?php

use DesignPatterns\Structural\Bridge\BridgeTest;

require_once '../../core/index.php';

BridgeTest::testCanPrintUsingTheHtmlFormatter();
BridgeTest::testCanPrintUsingThePlainTextFormatter();
