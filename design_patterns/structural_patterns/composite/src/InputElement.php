<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Composite;

class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}
