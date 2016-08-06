<?php
use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{
    public function testAdderShouldExists()
    {
        $adder = new Adder;
        $this->assertNotEmpty($adder);
    }

    public function testAdderSholdHaveTwoProperties()
    {
        $this->assertClassHasAttribute('firstOperand', Adder::class);
        $this->assertClassHasAttribute('secondOperand', Adder::class);
    }

    public function testAdderShouldReturnResult()
    {
        $adder = new Adder;
        $adder->firstOperand = 1;
        $adder->secondOperand = 1;
    }
}
