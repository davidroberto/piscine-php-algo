<html>
	
<head>
	<title>Mon super site de recettes</title>
</head>

<body>

<?php

$loggedUser = "David Robert";
$isProfileCompleted = false;
$recipes = ["pizzas", "carbo", "risotto"];
?>

<header>

<h2>
	
	Vous êtes connecté en tant que : <?php echo $loggedUser; ?>.


	<?php if ($isProfileCompleted === true) {
		echo " Votre profil est complété";
	} else {
		echo " Votre profil n'est pas complété";
	} ?>

</h2>
</header>

<main>

<h1>Les recettes de Roberto</h1>
<img src="https://www.petitsplatsentreamis.com/wp-content/uploads/2022/01/Cuisine-du-monde-20-idees-de-recettes-internationales.jpg" alt="recettes" />


<ul>

<?php foreach($recipes as $recipe) {
	echo "<li>" . $recipe . "</li>";
} ?>

</ul>

</main>

</body>

</html>