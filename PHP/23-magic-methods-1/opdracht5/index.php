<?php

	// Plaats hier je autoloader.
	include_once 'classes/MainApp.php';
	$app = new MainApp();
	
	// Plaats hier de logica om te bepalen welke content ingeladen moet worden.
	// Gebruik de pagina/method index() als fallback indien de $_GET niet gezet is.
	$page = isset($_GET['page']) ? $_GET['page'] : 'index';
	$app->$page();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Magic Methods</title>
		<style>
			body {
				font-family: Verdana, sans-serif;
				font-size: 24px;
				background-color: black;
				color: white;
			}
			section {
				margin: 100px 0;
			}			
			nav a, footer a {
				color: khaki;
			}
		</style>
	</head>
	<body>
		<nav>
			<p><a href="?action=index">Home</a> | <a href="?action=catalog">Our products</a> | <a href="?action=about">About us</a> | <a href="?action=contact">Contact</a></p>
		</nav>
		<section>
			<?php
				echo $app->getContent();
			?>
		</section>
		<footer>
			<p>© Tom Bartels <?=date('Y');?> - <a href="?action=privacy">Privacy Disclaimer</a></p>
		</footer>
	</body>
</html>