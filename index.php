<?php
	// je créé une variable "name" dont la valeur est david
	$name = "david";
	$bestFood = "carbo";
	$age = 35;
	$loveCss = false;
?>


<!-- je demande au php de générer du html avec un H1, incluant Bonjour, suivi de la valeur de la variable
 $name, suivi de la fermeture de la balise H1. Pour faire une instruction php dans du html, je reouvre la balise php.
echo en php permet d'afficher une valeur.
  -->
<h1>Bonjour <?php echo $name; ?> et j'aime les <?php echo $bestFood; ?>. Mon âge : <?php echo $age; ?>.</h1>


<p> CSS : 

<!-- j'utilise un if en php, et en fonction de la valeur de la variable $loveCss, j'affiche un coeur ou une bombe -->
<?php if ($loveCss === true) {
	echo "♥";
} else {
	echo "💣";
} ?>

</p>