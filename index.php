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


?>


<main>

	<h1>Le blog de Roberto</h1>

	<h2>Sous titre</h2>

	<?php foreach($articles as $article) { ?>

		<h2><?php echo $article["title"]; ?></h2>

		<p><?php echo $article["content"]; ?></p>
		
	<?php } ?>

</main>

</body>

</html>