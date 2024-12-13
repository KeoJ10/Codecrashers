<?php include('includes/verwerking.php') ?>
<html>
<head>
	<link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>
<div id="container">
		<header>
			<ol id="list">
                <li>
                    <a href="https://fontawesome.com/icons/house?f=classic&s=solid"><span content="Home"><i class="bi bi-house-fill"></i></span></a>
                </li>
                <li>></li>
                <li><a href="url">Muziek</a></li>
                <li>></li>
                <li><a href="url">Film & Games</a></li>
                <li>></li>
                <li><a href="url">Games</a></li>
                <li>></li>
                <li>PlayStation 4</li>
            </ol>
		</header>
<main>
            <section>
                <h1>Videogames - PlayStation 4</h1>
                <p>
                    Er is een groot aanbod in PlayStation 4 games. Elke game is divers en heeft unieke eigenschappen. Bedenk dus goed in wat voor game jij geïnteresseerd bent. In ons assortiment vind je games in verschillende genres van sport tot actie en van simulatie tot
                    Role Playing Game (RPG). Exclusieve games voor de PlayStation 4 zijn Horizon Zero Dawn, Uncharted, Gran Turismo, InFamous, Killzone.
                </p>
				</section>
				<section>
					<?php include('includes/filter.php');?>
				</section>
            <section id="products">
				<?=$loopedGames?>
</section>
</div>
</body>
</html>
