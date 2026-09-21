<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Webshop</title>
		<link type="text/css" rel="stylesheet" href="css/style1.css">
	</head>
	<body>
		<div id="container">
			<header>
				<span>Mijn webshop, © Tom Bartels</span>
			</header>
			<nav>
				<ul>
					<li><a href="index.php" target="_self">Home</a></li>
					<li><a href="#" target="_self">Klachten</a></li>
					<li><a href="#" target="_self">Over ons</a></li>
					<li><a href="#" target="_self">Voorwaarden</a></li>
					<li class="current"><a href="contact.php" target="_self">Contact</a></li>
				</ul>
				<div id="zoekbalk">
					<form action="index.php" method="POST">
						<input type="text" placeholder="zoeken..." name="zoeken"><input type="submit" value="Zoek!">
					</form>
				</div>
			</nav>
			<main>
				<?php

					if (!empty($_POST) && isset($_POST['contact'])){
						echo 'Uw mail is verstuurd.<hr>';
					}

				?>			
				<form action="contact.php" method="POST">
					<label>Uw naam:</label>
					<input type="text" name="naam" placeholder="uw naam...">
					<label>Uw e-mail:</label>
					<input type="email" name="email" placeholder="uw e-mail...">
					<label>Uw commentaar:</label>
					<textarea name="commentaar" placeholder="uw commentaar..."></textarea>
					<input type="submit" name="contact" value="Versturen">
				</form>
			</main>
		</div>
	</body>
</html>