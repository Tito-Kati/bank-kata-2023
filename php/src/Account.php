<?php declare(strict_types=1);

namespace Kata;

use Exception;

class Account
{
    public function __construct(
        private PrinterInterface $printer
    ) {}

    public function deposit(int $amount): void
    {
        throw new Exception('deposit Unimplemented');
    }

    public function withdraw(int $amount): void
    {
        throw new Exception('withdraw Unimplemented');
    }

    public function printStatement(): void
    {
        $this->printer->print('DATE | AMOUNT | BALANCE');
    }
}
