<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Decorator;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
