<?php
// Hier worden alle variabelen gedefinieerd// 
$title = "de titel";
$description = "de beschrijving";
$heading = "de header";
$paragraph = " de paragraaf";
?>
<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title?></title>
		<meta name=<?php echo $description?> content="Mijn beschrijving">
	</head>
	<body>
		<section>
			<h1><?php echo $heading ?></h1>
			<p><?php echo $paragraph?></p>
		</section>
	</body>
</html>
