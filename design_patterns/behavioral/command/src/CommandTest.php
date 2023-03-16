<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

class CommandTest
{
    public static function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        dump($receiver->getOutput());
    }
}
