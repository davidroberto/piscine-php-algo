<!DOCTYPE html>
<html>
	
<head>
	<title>Mon super site de recettes</title>
	<link rel="stylesheet" href="assets/style.css" />
</head>

<body>


<?php

$articles = [
	[
		"title" => "Article 1",
		"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex amet quia officia odit cumque magni, quibusdam aut optio, architecto voluptatibus cupiditate quos error tenetur quae? Exercitationem veniam minus excepturi. Voluptatum."
	],
	[
		"title" => "Article 2",
		"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex amet quia officia odit cumque magni, quibusdam aut optio, architecto voluptatibus cupiditate quos error tenetur quae? Exercitationem veniam minus excepturi. Voluptatum."
	],
	[
		"title" => "Article 3",
		"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex amet quia officia odit cumque magni, quibusdam aut optio, architecto voluptatibus cupiditate quos error tenetur quae? Exercitationem veniam minus excepturi. Voluptatum."
	],
	[
		"title" => "Article 4",
		"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex amet quia officia odit cumque magni, quibusdam aut optio, architecto voluptatibus cupiditate quos error tenetur quae? Exercitationem veniam minus excepturi. Voluptatum."
	]
];


// je créé une fonction nommée cutText
// cette fonction prend un parametre nommé textToCut
function cutText($textToCut) {

	// je vérifie la taille du parametre textToCut
	// s'il fait plus de 5 caractères
	if (strlen($textToCut) > 5) {
		// je récupère que les 5 premiers caractères du texte et j'ajoute "..." à la fin
		echo substr($textToCut, 0, 5) . "...";
	} else {
		// sinon (s'il fait moins de 10 caractères) j'affiche le texte en entier
		echo $textToCut;
	}
	
}

?>


<main>

	<h1>Le blog de Roberto</h1>

	<h2>Sous titre</h2>

	<?php foreach($articles as $article) { ?>

		<!--j'appelle la fonction cutText, en lui en passant en prametre le titre de l'article  -->
		<h2><?php cutText($article["title"]); ?></h2>

		<p><?php echo $article["content"]; ?></p>
		
	<?php } ?>

</main>

</body>

</html>