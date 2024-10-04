<?php
$gameProducts = [
				['game' => 'Red Dead Redemption 2','date' => '26-10-2018', 'price' => 59.99, 'console' => 'ps4', 'location' => 1, 'img' => 'images/9200000067180307.jpg'],
				['game' =>  'Ni No Kuni II: Revenant Kingdom', 'date' => '23-03-2018', 'price' => 49.99, 'console' => 'ps4', 'location' => 2,'img' => 'images/9200000053083967.jpg'],
				['game' =>  'Biomutant', 'date' => '31-12-2018', 'price' => 49.99, 'console' => 'ps4', 'location' => 3, 'img' => 'images/9200000082972427.jpg'],
				['game' =>  'Far Cry 5 - Deluxe Edition', 'date' => '27-03-2018', 'price' => 59.99, 'console' => 'ps4', 'location' => 4,'img' => 'images/9200000078668488.jpg'],
				['game' =>  'The Lost Child', 'date' => '30-03-2018', 'price' => 59.99, 'console' => 'ps4', 'location' => 5,'img' => 'images/9200000084844101.jpg'],
				['game' =>  'Injustice 2 - Legendary Edition', 'date' => '30-03-2018', 'price' => 49.99, 'console' => 'ps4', 'location' => 6,'img' => 'images/9200000090287767.jpg'],
				['game' =>  'Dark Souls Remastered', 'date' => '25-05-2018', 'price' => 49.99, 'console' => 'ps4', 'location' => 7,'img' => 'images/9200000088311502.jpg'],
				['game' =>  'Attack on Titan 2 - A.O.T. 2', 'date' => '30-03-2018', 'price' => 59.99, 'console' => 'ps4', 'location' => 8, 'img' => 'images/9200000088397115.jpg']
];
$productString = '';
for($i = 0; $i < count($gameProducts); $i++){
	$productString .= '<article>
			<span class="release">'. $gameProducts[$i]['date'] . '</span>
			<img src="' . $gameProducts[$i]['img'] . '" alt="' . $gameProducts[$i]['game'] . ' - PS4" width="168" height="210">
			<span class="console">'.$gameProducts[$i]['console']. '</span>
			<span class="name">' .$gameProducts[$i]['game']. '</span>
			<span class="price">' . $gameProducts[$i]['price'] . '</span>
			</article>';
		}
	

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PlayStation 4</title>
		<link rel="stylesheet" href="css/stylesheet.css">
		<script src="https://use.fontawesome.com/a1d6f5445a.js"></script>
	</head>
	<body>
		<div id="container">
			<header>
				<ol class="breadcrumbs">
					<li>
						<a href="http://www.webshop.com"><span content="Home"><i class="fa fa-home"></i></span></a> >
					</li>
					<li>
						<a href="http://www.webshop.com/muziek-film-games"><span>Muziek, Film & Games</span></a> >
					</li>
					<li>
						<a href="http://www.webshop.com/games"><span>Games</span></a> >
					</li>
					<li>
						<span>PlayStation 4</span>
					</li>
				</ol>
			</header>
			<main>
				<section>
					<h1>Videogames - PlayStation 4</h1>
					<p>
						Er is een groot aanbod in PlayStation 4 games. Elke game is divers en heeft unieke eigenschappen. Bedenk dus goed in wat voor game jij geïnteresseerd bent. In ons assortiment vind je games in verschillende genres van sport tot actie en van simulatie tot Role Playing Game (RPG). Exclusieve games voor de PlayStation 4 zijn Horizon Zero Dawn, Uncharted, Gran Turismo, InFamous, Killzone.
					</p>
				</section>
				<section id="products">
				<?=$productString;?>
				</section>
			</main>
		</div>
		<footer></footer>
	</body>
</html>