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

    public function operate($firstOperand, $secondOperand)
    {
        if ( ! is_numeric($firstOperand) || ! is_numeric($secondOperand) )
            throw new ErrorException('Numeric only');

        $result = $firstOperand + $secondOperand;

        return $result;
    }
}
