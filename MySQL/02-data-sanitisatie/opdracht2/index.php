<?php

	if (!empty($_POST) && isset($_POST['zoeken'])){
		$zoekwoord = $_POST['zoeken'];
		$db = mysqli_connect('localhost','root','','mysql_les2');
		$query = "SELECT * FROM products WHERE name LIKE '%$zoekwoord%'";
		echo $query;
		
		$gevonden = array();
		if (mysqli_multi_query($db, $query)) {
			do {
				if ($result = mysqli_store_result($db)) {
					while ($row = mysqli_fetch_row($result)) {
						$gevonden[] = $row;
					}
					mysqli_free_result($result);
				}
			} while (mysqli_next_result($db));
		}
		if (count($gevonden) <1){
			$gevonden = 'Geen producten met deze naam gevonden.';
		}
	}

	$db = mysqli_connect('localhost','root','','mysql_les2');
	$query = "SELECT products.name, descriptions_nl.description, products.price, products.image FROM products INNER JOIN descriptions_nl ON products.id = descriptions_nl.id";
	$result = mysqli_query($db, $query);
	
	$products = array();
	while ($row = mysqli_fetch_assoc($result)){
		$products[] = $row;
	}	

	$data = '';
	foreach ($products as $key => $value){
		$data .= '<article>';
		$data .= '<h2>'.$value['name'].'</h2>';
		$data .= '<img src="images/'.$value['image'].'" width="120">';
		$data .= '<h3>Prijs: &euro;'.$value['price'].'</h3>';
		$data .= '<p>'.substr($value['description'], 0, 200).'...</p>';
		$data .= '</article>';
	}

?>
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
					<li class="current"><a href="index.php" target="_self">Home</a></li>
					<li><a href="#" target="_self">Klachten</a></li>
					<li><a href="#" target="_self">Over ons</a></li>
					<li><a href="#" target="_self">Voorwaarden</a></li>
					<li><a href="contact.php" target="_self">Contact</a></li>
				</ul>
				<div id="zoekbalk">
					<form action="index.php" method="POST">
						<input type="text" placeholder="zoeken..." name="zoeken"><input type="submit" value="Zoek!">
					</form>
				</div>
			</nav>
			<main>
				<?php
					if (!empty($gevonden) && is_array($gevonden)){
						echo 'Gevonden producten:<ul>'; 
						foreach ($gevonden as $key => $value){
							echo '<li>'.$value[1].'</li>';
						}
						echo '</ul>';
						echo '<hr>';
					} elseif (!empty($gevonden) && is_string($gevonden)){
						echo $gevonden;
						echo '<hr>';
					}
					
					echo $data;
				?>
				<br style="clear: both;">
			</main>
		</div>
	</body>
</html>