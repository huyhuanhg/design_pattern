<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge;

class BridgeTest
{
    public static function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        dump($service->get());
    }

    public static function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        dump($service->get());
    }
}
