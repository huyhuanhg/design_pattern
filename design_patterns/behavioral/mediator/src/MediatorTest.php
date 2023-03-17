<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

class MediatorTest
{
    public static function testOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $mediator->printInfoAbout('Dominik');
    }
}
