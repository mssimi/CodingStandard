<?php

namespace SymplifyTests\MikulasCodeSniffs\Sniffs\Namespaces\UseInAlphabeticalOrder;

use PHPUnit_Framework_TestCase;
use Symplify\CodingStandard\Tests\CodeSnifferRunner;

/**
 * @covers SymplifyCodingStandard\Sniffs\Namespaces\UseInAlphabeticalOrderSniff
 */
final class UseInAlphabeticalOrderSniffTest extends PHPUnit_Framework_TestCase
{
    public function testDetection()
    {
        $codeSnifferRunner = new CodeSnifferRunner('SymplifyCodingStandard.Namespaces.UseInAlphabeticalOrder');

        $this->assertSame(1, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/wrong.php.inc'));
        $this->assertSame(1, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/wrong2.php.inc'));
        $this->assertSame(1, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/wrong3.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct2.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct3.php.inc'));
    }
}
