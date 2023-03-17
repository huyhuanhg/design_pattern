<?php

use DesignPatterns\Behavioral\Interpreter\InterpreterTest;

require_once '../../core/index.php';

$tester = new InterpreterTest();

$tester->setUp();

$tester->testOr();

$tester = new InterpreterTest();

$tester->setUp();

$tester->testAnd();
