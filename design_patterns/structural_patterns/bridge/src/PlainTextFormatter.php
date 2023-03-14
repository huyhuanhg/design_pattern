<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Bridge;

class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        return $text;
    }
}