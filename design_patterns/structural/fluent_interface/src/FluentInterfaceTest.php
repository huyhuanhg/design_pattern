<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\FluentInterface;

class FluentInterfaceTest
{
    public static function testBuildSQL()
    {
        $query = (new Sql())
                ->select(['foo', 'bar'])
                ->from('foobar', 'f')
                ->where('f.bar = ?');

        dump('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}
