<?php

use DesignPatterns\Behavioral\State\StateTest;

require_once '../../core/index.php';

StateTest::testCanProceedToStateDone();
StateTest::testCanProceedToStateShipped();
StateTest::testIsCreatedWithStateCreated();
StateTest::testStateDoneIsTheLastPossibleState();
