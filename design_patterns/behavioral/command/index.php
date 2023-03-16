<?php

use DesignPatterns\Behavioral\Command\CommandTest;
use DesignPatterns\Behavioral\Command\UndoableCommandTest;

require_once '../../core/index.php';

dump(CommandTest::class);
CommandTest::testInvocation();

dump(UndoableCommandTest::class);
UndoableCommandTest::testInvocation();
