<?php

use DesignPatterns\Behavioral\Visitor\RecordingVisitor;
use DesignPatterns\Behavioral\Visitor\VisitorTest;

require_once '../../core/index.php';

$tester = new VisitorTest(new RecordingVisitor());

$tester->testVisitSomeRole($tester->provideRoles()[0]);

$tester = new VisitorTest(new RecordingVisitor());

$tester->testVisitSomeRole($tester->provideRoles()[1]);
