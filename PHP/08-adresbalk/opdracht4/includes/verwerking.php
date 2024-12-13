<?php

$loopedGames = '';
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

if(!empty($_GET['oplopend'])){
	usort($gameProducts, function($a, $b) {
		return $a['game'] <=> $b['game'];
	});
}
if(!empty($_GET['aflopend'])){
		usort($gameProducts, function($a, $b) {
			return $b['game'] <=> $a['game'];
		});
}

$showProductAmount = 8;

if(!empty($_GET['showProducts'])){
        $showProductAmount = $_GET['showProducts'];
}

if(!preg_match('/^[0-9]+$/', $showProductAmount)) {
    echo "Error: Only numeric values are allowed.";
    exit;
}
if(!(!empty($_GET['oplopend']) == 'oplopend' || !empty($_GET['aflopend']) == 'aflopend')){
    usort($gameProducts, function($a, $b) {
		return $a['game'] <=> $b['game'];
	});
}

if($showProductAmount > 8){
    $showProductAmount = 4;
}

	for($i = 0; $i < $showProductAmount; $i++){
		$loopedGames .= ' <article><span class="release">' . $gameProducts[$i]['date'] .
		'</span><img src="' . $gameProducts[$i]['img'] . '"alt=" '. $gameProducts[$i]['img'] . '" width="168" height="210">' .
		'<span class="console">' . $gameProducts[$i]['console'] . '</span>' .
		'<span class="name">' . $gameProducts[$i]['game'] .'</span>' .
		'<span class="price">' . $gameProducts[$i]['price'] . '</span></article>';
	}

    if(!empty($_GET['showProducts'])){
        preg_match("/[A-Za-z0-9]+/", $showProductAmount);
    }
?>