<?php
	
	if (isset($_GET['id']) && !empty($_GET['id'])){
		$id = $_GET['id'];
	} else {
		$id = 0;
	}
	
	// In de praktijk zouden de productgegevens natuurlijk uit een database komen.
	switch ($id){
		case 1:
			$name = 'Lords of Waterdeep';
			$price = 39.99;
			$img = 'lords-of-waterdeep.jpg';
			break;
		case 2:
			$name = 'Joking Hazard';
			$price = 23.99;
			$img = 'joking-hazard.jpg';
			break;
		case 3:
			$name = 'Arkham Horror';
			$price = 43.99;
			$img = 'arkham-horror.jpg';
			break;
		case 4:
			$name = 'Smash Up';
			$price = 37.99;
			$img = 'smash-up.jpg';
			break;			
		default:
			$name = 'Geen geldig product gekozen.';
			$price = 0.00;
			$img = 'no-product-found.png';
	}
	
	$links = [
        ['id' => 1, 'name' => 'Lords of Waterdeep'],
        ['id' => 2, 'name' => 'Joking Hazard'],
        ['id' => 3, 'name' => 'Arkham Horror'],
        ['id' => 4, 'name' => 'Smash Up']
    ];

?>
<!DOCTYPE html>
<html lang="nl-NL">
	<head>

		<meta charset="UTF-8">
		<title>Productpagina</title>
		<link rel="stylesheet" href="css/main.css">
		
	</head>
	<body>
		<div id="container">
			<?php include_once 'includes/nav.php';?>
			<?php
			foreach($links as $names): ?>
			<a href="product.php?id=<?=$names['id'];?>"><?=$names['name'];?></a>
			<?php endforeach ?>
			<section>
				<h1><?=$name;?></h1>
				<h2>€<?=$price;?></h2>
				<img src="images/<?=$img;?>" alt="<?=$name;?>">
			</section>
		
		</div>
	</body>
</html>