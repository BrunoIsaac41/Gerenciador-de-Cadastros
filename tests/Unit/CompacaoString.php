<?php
use PHPUnit\Framework\TestCase;
class StringTest extends TestCase
{
    public function testConcatenacao()
    {
        $this->assertEquals("HelloWorld", "Hello" . "World");
    }
}
