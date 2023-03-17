<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer;

class ObserverTest
{
    public static function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        dump($observer->getChangedUsers());
    }
}
