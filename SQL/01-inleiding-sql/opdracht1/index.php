<?php
//hier worden variabelen gedefineerd//
$title = "mijn title";
$description = "de beschrijving";
$heading = "de header";
$paragraph = "de paragraaf";
?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<title>Mijn titel</title>
        <?php echo $title; ?>
		<meta name="description" content="Mijn beschrijving">
	</head>
	<body>
		<section>
        <?php echo $description; ?>
			<h1>Mijn kopje</h1>
            <?php echo $heading; ?>
			<p>Mijn tekst</p>
            <?php echo $paragraph; ?>
		</section>
	</body>
</html>