<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;

class StrategyTest
{
    public static function provideIntegers()
    {
        return [['id' => 2], ['id' => 1], ['id' => 3]];
    }

    public static function provideDates()
    {
        return [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']];
    }

    /**
     * @dataProvider provideIntegers
     *
     * @param array $collection
     * @param array $expected
     */
    public static function testIdComparator($collection)
    {
        $obj = new Context(new IdComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        dump($firstElement);
    }

    /**
     * @dataProvider provideDates
     *
     * @param array $collection
     * @param array $expected
     */
    public static function testDateComparator($collection)
    {
        $obj = new Context(new DateComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        dump($firstElement);
    }
}
