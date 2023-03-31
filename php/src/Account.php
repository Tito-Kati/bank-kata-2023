<?php declare(strict_types=1);

namespace Kata;

class Account
{
    public function __construct($printer)
    {

    }

    public function deposit(int $amount): void
    {
        throw new \Exception();
    }

    public function withdraw(int $amount): void
    {
        throw new \Exception();
    }

    public function printStatement(): void
    {
        throw new \Exception();
    }
}
