<?php
	// je créé une variable "name" dont la valeur est david
	$name = "david";
?>



<!-- je demande au php de générer du html avec un H1, incluant Bonjour, suivi de la valeur de la variable
 $name, suivi de la fermeture de la balise H1. Pour faire une instruction php dans du html, je reouvre la balise php.
echo en php permet d'afficher une valeur.
  -->
<h1>Bonjour <?php echo $name; ?> </h1>