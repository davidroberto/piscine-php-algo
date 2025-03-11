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

$descriptionBlog = "Une description un peu longue de mon blog. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex amet quia officia odit cum";


function displayText($textToDisplay) {

	if(strlen($textToDisplay) > 20) {
		echo "...";
	 } else {
		echo $textToDisplay;
	 }

}


?>


<main>

	<h1>Le blog de Roberto</h1>

	<h2><?php displayText($descriptionBlog); ?></h2>


	<?php foreach($articles as $article) { ?>

	<!-- j'utilise la clé title pour afficher la valeur du titre dans le tableau -->

		<?php displayText($article['title']); ?>

		<p><?php echo $article["content"]; ?></p>
		
	<?php } ?>

	


</main>

</body>

</html>