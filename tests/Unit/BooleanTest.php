<?php
use PHPUnit\Framework\TestCase;
class BooleanTest extends TestCase
{
    public function testBooleano()
    {
        $this->assertTrue(3 > 2);
        $this->assertFalse(2 > 3);
    }
}
