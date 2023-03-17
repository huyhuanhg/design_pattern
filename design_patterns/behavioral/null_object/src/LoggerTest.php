<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\NullObject;

class LoggerTest
{
    public static function testNullObject()
    {
        $service = new Service(new NullLogger());
        $service->doSomething();
    }

    public static function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $service->doSomething();
    }
}