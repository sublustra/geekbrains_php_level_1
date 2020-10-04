<?php
function mathOperation($arg1, $arg2, $operation) {
	switch($operation){
	case "-":
       return subtract ($arg1, $arg2);
	case "*":
       return mult ($arg1, $arg2);
	case "/":
       return divide ($arg1, $arg2);
	case "+":
       return sum ($arg1, $arg2);
   default:
	return "не верное значение";
	 
}

$x=mathOperation(1, 2, " операция");
echo $x;

?>