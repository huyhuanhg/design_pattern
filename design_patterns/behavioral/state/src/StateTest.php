<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;

class StateTest
{
    public static function testIsCreatedWithStateCreated()
    {
        $orderContext = OrderContext::create();

        dump('created', $orderContext->toString());
    }

    public static function testCanProceedToStateShipped()
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();

        dump('shipped', $contextOrder->toString());
    }

    public static function testCanProceedToStateDone()
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        dump('done', $contextOrder->toString());
    }

    public static function testStateDoneIsTheLastPossibleState()
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        dump('done', $contextOrder->toString());
    }
}
