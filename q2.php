<?php
$num1=5;
$num2=5;
$operator='/';
Switch($operator){

case "+":
echo($num1+$num2);
break;

case "-":
echo($num1-$num2);
break;

case "*":
echo($num1*$num2);
break;

case "/":
echo($num1/$num2);
break;

default :
echo"Out of operate";
break;

}