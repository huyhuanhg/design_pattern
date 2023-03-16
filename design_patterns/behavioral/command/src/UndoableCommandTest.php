<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

class UndoableCommandTest
{
    public static function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        dump($receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();

        $invoker->run();
        dump($receiver->getOutput());

        $messageDateCommand->undo();

        $invoker->run();
        dump($receiver->getOutput());
    }
}
