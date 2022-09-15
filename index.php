<?php 

//? cukup include inherit class tidak perlu parent class, karena pada class frugalCalculator sudah terinclude parent class 
include 'frugalCalculator.php';


// * Calculator 
echo "= = = C A L C U L A T O R   = = = <br><br>";
$Calculator->Charge(50);
echo $Calculator->Status($Calculator);

echo $Calculator->Sum(1,2);
echo $Calculator->Status($Calculator);

echo $Calculator->Substract(1, 2);
echo $Calculator->Status($Calculator);

echo $Calculator->Multiplication(1, 2);
echo $Calculator->Status($Calculator);

echo $Calculator->Divide(1, 2);
echo $Calculator->Status($Calculator);

echo $Calculator->Pow(10, 1000);
echo $Calculator->Status($Calculator);

echo $Calculator->Divide(1, 2);
$Calculator->Charge(5);
echo $Calculator->Divide(1, 2);
echo "<br><br><br><br><br><br><br><br><br>";




// * Calculator Hemat
echo "<br> = = = C A L C U L A T O R  H E M A T   = = = <br><br>";
$calculatorHemat->Charge(25);
echo $calculatorHemat->Status($calculatorHemat);

echo $calculatorHemat->Sum(1,2);
echo $calculatorHemat->Status($calculatorHemat);

echo $calculatorHemat->Substract(1, 2);
echo $calculatorHemat->Status($calculatorHemat);

echo $calculatorHemat->Multiplication(1, 2);
echo $calculatorHemat->Status($calculatorHemat);

echo $calculatorHemat->Divide(1, 2);
echo $calculatorHemat->Status($calculatorHemat);

echo $calculatorHemat->Pow(10, 1000);
echo $calculatorHemat->Status($calculatorHemat);

echo $calculatorHemat->Divide(1, 2);
$calculatorHemat->Charge(5);
echo $calculatorHemat->Divide(1, 2);



echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
?>