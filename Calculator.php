<?php 


class Calculator {
    // ? Declare var
    public $daya;

    // ? Construct
    public function __construct()
    {
        $this->daya = 0;
    }

    // ? Charge Function
    public function Charge(int $daya)
    {
        $this->daya = $daya;
    }

    // ? Operator Function 
    public function Operator()
    {
        if($this->daya < 10) {
            return false;
        }
        $this->daya -= 10;
        return true;
    }


    // ? Status Function
    public function Status($obj)
    {
        echo "<br>";
        $calculatorName = get_class($obj);
        echo "Jenis Kalkulator : " . $calculatorName . "<br>";
        return "Daya : " . $this->daya . " % <br>";
    }

    // ? Sum Function
    public function Sum(int $a, int $b)
    {
        if( $this->Operator() ) {
            echo "<br>";
            return "=> " . $a . " + " . $b . " = " . $a+$b . "<br>";
        }

        echo "<br>";
        return "Daya tidak cukup";
    }

    // ? Substract Function
    public function Substract(int $a, int $b)
    {
        if( $this->Operator() ) {
            echo "<br>";
            return "=> " . $a . " - " . $b . " = " . $a-$b . "<br>";
        }

        echo "<br>";
        return "Daya tidak cukup";
    }

    // ? Multiplication Function
    public function Multiplication(int $a, int $b)
    {
        if( $this->Operator() ) {
            echo "<br>";
            return "=> " . $a . " x " . $b . " = " . $a*$b . "<br>";
        }

        echo "<br>";
        return "Daya tidak cukup";
    }

    // ? Divide Function
    public function Divide(int $a, int $b)
    {
        if( $this->Operator() ) {
            if($b == 0) {
                echo "<br>";
                return "Pembagi tidak boleh nol !!";
            }
            echo "<br>";
            return "=> " . $a . " / " . $b . " = " . $a/$b . "<br>";
        }

        echo "<br>";
        return "Daya tidak cukup";
    }

    // ? Pow Function
    public function Pow(int $a, int $b)
    {
        $result = pow($a , $b);
        if( $this->Operator() ) {
            if($result > 1000000) {
                echo "<br>";
                return "Nilai diluar batas yang ditentukan <br>";
            }
            echo "<br>";
            return "=> " . $a . " pangkat " . $b . " = " . $result . "<br>";
        }

        echo "<br>";
        return "Daya tidak cukup";
    }



}



$Calculator = new Calculator();


?>