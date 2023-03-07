<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Adapter;

use DesignPattern\Structural\Adapter\PaperBook;
use DesignPattern\Structural\Adapter\EBookAdapter;
use DesignPattern\Structural\Adapter\Kindle;

class AdapterTest
{
    public static function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        dump($book->getPage());
    }

    public static function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        dump($book->getPage());
    }
}