<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Proxy;

interface BankAccount
{
    public function deposit(int $amount);

    public function getBalance(): int;
}
