<?php 
include 'Calculator.php';

class frugalCalculator extends Calculator {
    public function Operator()
    {
        if($this->daya < 5) {
            return false;
        }
        $this->daya -= 5;
        return true;
    }
}



$calculatorHemat = new frugalCalculator();






?>