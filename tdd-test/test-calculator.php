<?php
include 'Calculator.php';

$myCalc = new Calculator();

echo $myCalc->add(9,98);
echo "<br>";
echo $myCalc->multiply(15,15);
echo "<br>";
echo $myCalc->divide(10,3);
echo "<br>";
echo $myCalc->divide(21,13);
echo "<br>";
echo "You can see that the result rounds up to the thirteen decimal places.";


