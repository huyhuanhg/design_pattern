<?php

declare(strict_types=1);

namespace DesignPattern\Creational\ObjectPool;

class StringReverseWorker
{
    public function run(string $text): string
    {
        return strrev($text);
    }
}
