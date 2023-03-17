<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Visitor;

class VisitorTest
{
    public function __construct(private RecordingVisitor $visitor)
    {
    }

    public function provideRoles()
    {
        return [
            new User('Dominik'),
            new Group('Administrators'),
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        dump($role, $this->visitor->getVisited()[0]);
    }
}
