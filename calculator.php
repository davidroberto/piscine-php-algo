<?php 

function addNumbers($number1, $number2) {
	return $number1 + $number2;
}

function substractNumbers($number1, $number2) {
	return $number1 - $number2;
}

function divibeBy2($number1) {
	return $number1 / 2;
}


function calculateSquareRoot($number1) {
	return sqrt($number1);
}


?>

<html>


	<?php $resultAdd = addNumbers(10, 20); ?>
	<h1>Le résultat de l'addition est : <?php echo $resultSubstract; ?></h1>

	<?php $resultSubstract = substractNumbers(10, 5); ?>
	<h1>Le résultat de la soustraction est : <?php echo $resultSubstract; ?></h1>

	<?php $resultDivide = divibeBy2(34); ?>
	<h1>Le résultat de la division est : <?php echo $resultDivide; ?></h1>

	<?php $resultSquareRoot = calculateSquareRoot(25); ?>
	<h1>Le résultat de la racine carrée est : <?php echo $resultSquareRoot; ?></h1>

</html>
