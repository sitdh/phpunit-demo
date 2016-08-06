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

    public function results()
    {
        return $this->firstOperand + $this->secondOperand;
    }
}
