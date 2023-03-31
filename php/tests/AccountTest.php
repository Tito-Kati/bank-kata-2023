<?php declare(strict_types=1);

namespace KataTests;

use Kata\Account;
use KataTests\Mocks\PrinterMock;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    /** @test */
    public function bank_operations(): void
    {
        $mockPrinter = new PrinterMock();
        $sut = new Account($mockPrinter);

        $sut->deposit(1000);
        $sut->deposit(2000);
        $sut->withdraw(500);
        $sut->printStatement();

        $expectedResult = <<< EOT
DATE | AMOUNT | BALANCE
24/01/2012 | 500.00 | 2500.00
23/01/2012 | 2000.00 | 3000.00
20/01/2012 | 1000.00 | 1000.00
EOT;

        self::assertEquals($expectedResult, $mockPrinter->getPrint());
    }

}
