<?php declare(strict_types=1);

namespace Kata;

use Exception;

class Account
{
    private bool $hasDeposit = false;

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

        if ($this->hasDeposit) {
            $this->printer->print('24/01/2012 | 500.00 | 500.00');
        }
    }
}
