<?php 

// la fonction n'affiche plus le résultat
// elle fait juste l'addition et retourne le résultat
function addNumbers($number1, $number2) {
	return $number1 + $number2;
}

// je récupère la valeur de retour de la fonction
// et je la stocke dans une variable
$result = addNumbers(20, 20);

?>

<h1><?php echo $result; ?></h1>
