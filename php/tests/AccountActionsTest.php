<?php declare(strict_types=1);

namespace KataTests;

use Kata\Account;
use KataTests\Mocks\PrinterMock;
use PHPUnit\Framework\TestCase;

class AccountActionsTest extends TestCase
{
    /** @test */
    public function print_statement_from_empty_state(): void
    {
        $mockPrinter = new PrinterMock();
        $sut = new Account($mockPrinter);
        $sut->printStatement();

        $expectedResult = <<< EOT
DATE | AMOUNT | BALANCE
EOT;

        $this->assertEquals($expectedResult, $mockPrinter->getPrint());
    }

    /** @test */
    public function deposit_from_empty_account(): void
    {
        $mockPrinter = new PrinterMock();
        $sut = new Account($mockPrinter);
        $sut->deposit(500);

        $expectedResult = <<< EOT
DATE | AMOUNT | BALANCE
24/01/2012 | 500.00 | 500.00
EOT;

        $this->assertEquals($expectedResult, $mockPrinter->getPrint());
    }
}
