<?php
use PHPUnit\Framework\TestCase;
class ArrayTest extends TestCase
{
    public function testArrayContemElemento()
    {
        $lista = ["maçã", "banana", "laranja"];
        $this->assertContains("banana", $lista);
    }
}
