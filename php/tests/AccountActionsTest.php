<?php declare(strict_types=1);

namespace KataTests;

use Kata\Account;
use KataTests\Mocks\PrinterMock;
use PHPUnit\Framework\TestCase;

class AccountActionsTest extends TestCase
{
    /** @test */
    public function print_statement(): void
    {
        $mockPrinter = new PrinterMock();
        $sut = new Account($mockPrinter);
        $sut->printStatement();

        $expectedResult = <<< EOT
DATE | AMOUNT | BALANCE
EOT;

        $this->assertEquals($expectedResult, $mockPrinter->getPrint());
    }
}
