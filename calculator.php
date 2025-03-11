<?php 

function addNumbers($number1, $number2) {
	echo "<p>le résultat de l'addition de " . $number1 . " et " . $number2 . " est : " . $number1 + $number2 . "</p>";
}

addNumbers(10, 20);


function substractNumbers($number1, $number2) {
	echo "<p>le résultat de la soustraction de " . $number1 . " et " . $number2 . " est : " . $number1 - $number2 . "</p>";
}

substractNumbers(10, 5);


function divibeBy2($number1) {
	echo "<p>le résultat de la division de ". $number1 ." par deux est : " . $number1 / 2 . "</p>";
}

divibeBy2(34);


function calculateSquareRoot($number1) {
	echo "<p>le résultat de la racine carrée de " . $number1 . " est : " . sqrt($number1) . "</p>";
}

calculateSquareRoot(25);

?>