<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testTrueIsTrue(): void
    {
        $var1 = true;

        $var2 = true;

        $this->assertSame( $var1, $var2 );
    }
}
