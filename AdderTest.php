<?php
use PHPUnit\Framework\TestCase;

include 'Adder.php';

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

    public function testAdderShouldHoldAttributesValue()
    {
        $adder = new Adder;

        // Initial values
        $this->assertEquals(0, $adder->firstOperand);
        $this->assertEquals(0, $adder->secondOperand);

        // Assign
        $adder->firstOperand = 1;
        $adder->secondOperand = 1;

        $this->assertEquals(1, $adder->firstOperand);
        $this->assertEquals(1, $adder->secondOperand);
    }

    public function testAdderShouldComputeOperands()
    {
    
        $adder = new Adder;

        $adder->firstOperand = 1;
        $adder->secondOperand = 1;
        $this->assertEquals(2, $this->results());

    }
}
