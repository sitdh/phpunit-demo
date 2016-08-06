<?php 

class Adder
{
    public $firstOperand;
    public $secondOperand;

    public function __construct()
    {
        $this->firstOperand = 0;
        $this->secondOperand = 0;
    }

    public function operate(int $firstOperand, int $secondOperand)
    {
        return $firstOperand + $secondOperand;
    }
}
