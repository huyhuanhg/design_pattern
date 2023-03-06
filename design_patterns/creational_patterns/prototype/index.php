<?php

use DesignPattern\Creational\Prototype\ComponentWithBackReference;
use DesignPattern\Creational\Prototype\PHPBookPrototype;
use DesignPattern\Creational\Prototype\Prototype;
use DesignPattern\Creational\Prototype\SQLBookPrototype;

require_once '../../../core/index.php';

  writeln('BEGIN TESTING PROTOTYPE PATTERN');
  writeln('');

  $phpProto = new PHPBookPrototype();
  $sqlProto = new SQLBookPrototype();

  $book1 = clone $sqlProto;
  $book1->setTitle('SQL For Cats');
  writeln('Book 1 topic: '.$book1->getTopic());
  writeln('Book 1 title: '.$book1->getTitle());
  writeln('sqlProto 1 title: '.$sqlProto->getTitle());
  writeln('');

  $book2 = clone $phpProto;
  $book2->setTitle('OReilly Learning PHP 5');
  writeln('Book 2 topic: '.$book2->getTopic());
  writeln('Book 2 title: '.$book2->getTitle());
  writeln('phpProto 2 title: '.$phpProto->getTitle());
  writeln('');

  $book3 = clone $sqlProto;
  $book3->setTitle('OReilly Learning SQL');
  writeln('Book 3 topic: '.$book3->getTopic());
  writeln('Book 3 title: '.$book3->getTitle());
  writeln('sqlProto 3 title: '.$sqlProto->getTitle());
  writeln('');

  writeln('END TESTING PROTOTYPE PATTERN');

/**
 * The client code.
 */
function clientCode()
{
    $p1 = new Prototype();
    $p1->primitive = 245;
    $p1->component = new \DateTime();
    $p1->circularReference = new ComponentWithBackReference($p1);
    $p2 = clone $p1;

    if ($p1->primitive === $p2->primitive) {
        d_strong('Primitive field values have been carried over to a clone. Yay!');
    } else {
        d_strong('Primitive field values have not been copied. Booo!');
    }

    dump($p1->component, $p2->component);

    if ($p1->component === $p2->component) {
        d_strong('Simple component has not been cloned. Booo!');
    } else {
        d_strong('Simple component has been cloned. Yay!');
    }

    dump($p1->circularReference, $p2->circularReference);

    if ($p1->circularReference === $p2->circularReference) {
        d_strong('Component with back reference has not been cloned. Booo!');
    } else {
        d_strong('Component with back reference has been cloned. Yay!');
        echo "<b></b><br />";
    }

    dump($p1->circularReference->prototype, $p2->circularReference->prototype);

    if ($p1->circularReference->prototype === $p2->circularReference->prototype) {
        d_strong('Component with back reference is linked to original object. Booo!');
    } else {
        d_strong('Component with back reference is linked to the clone. Yay!');
    }
}

clientCode();
