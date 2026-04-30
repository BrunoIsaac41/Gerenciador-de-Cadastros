<?php
use PHPUnit\Framework\TestCase;

class NumeroTest extends TestCase
{
    public function testNumerosIguais()
    {
        $this->assertEquals(10, 5 + 5);
    }
}
