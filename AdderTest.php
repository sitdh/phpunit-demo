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

    /**
     * @expectedException TypeError
     **/
    public function testStringShouldNotOperate()
    {
        $adder = new Adder;
        $adder->operate('s', 0);
        $adder->operate(0, 's');
    }

    public function testAdderShouldOperateFirstTwoArguments()
    {
        $adder = new Adder;
        print_r($adder->operate(1, 2));
        $this->assertEquals(2, $adder->operate(1, 2));
    }

}
