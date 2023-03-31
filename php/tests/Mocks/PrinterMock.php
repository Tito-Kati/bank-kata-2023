<?php

namespace KataTests\Mocks;

use Kata\PrinterInterface;

class PrinterMock implements PrinterInterface
{
    private string $lines;

    public function print(string $string): void
    {
        $this->lines = $string;
    }

    public function getPrint(): string
    {
        return $this->lines;
    }
}
