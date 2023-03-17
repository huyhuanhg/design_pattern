<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Memento;

class MementoTest
{
    public static function testOpenTicketAssignAndSetBackToOpen()
    {
        $ticket = new Ticket();

        // open the ticket
        $ticket->open();
        $openedState = $ticket->getState();
        dump(State::STATE_OPENED, (string) $ticket->getState());

        $memento = $ticket->saveToMemento();

        // assign the ticket
        $ticket->assign();
        dump(State::STATE_ASSIGNED, (string) $ticket->getState());

        // now restore to the opened state, but verify that the state object has been cloned for the memento
        $ticket->restoreFromMemento($memento);

        dump(State::STATE_OPENED, (string) $ticket->getState());
        dump($openedState, $ticket->getState());
    }
}