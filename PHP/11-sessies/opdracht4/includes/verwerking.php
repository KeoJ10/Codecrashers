<?php
session_start();
if (!isset($_SESSION['shoppingCart'])) {
    $_SESSION['shoppingCart'] = [];
}
$loopedGames = '';
$itemList = '';
$totalPrice = 0;
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

if(!empty($_GET['showProducts'])){
    preg_match("/[A-Za-z0-9]+/", $showProductAmount);
}

if($showProductAmount > 8){
    $showProductAmount = 4;
}

if (isset($_GET['addToCart'])) {
    $gameIndex = intval($_GET['addToCart']);
    if (isset($gameProducts[$gameIndex])) {
        $_SESSION['shoppingCart'][] = [
            'game' => $gameProducts[$gameIndex]['game'],
            'price' => $gameProducts[$gameIndex]['price']
        ];
    }
}

$array = [];
$quantities = [];
if (!empty($_SESSION['shoppingCart'])) {
    foreach ($_SESSION['shoppingCart'] as $item) {
        if (!in_array($item, $array)) {
            $array[] = $item;
            $quantities[$item['game']] = 1;
        } else {
            $quantities[$item['game']]++;
        }
    }
    
    $itemList .= '<table><tr><th>Game</th><th>Price</th><th>Quantity</th><th>Total Price</th></tr>';
    foreach ($array as $item) {
        $itemTotalPrice = $item['price'] * $quantities[$item['game']];
        $itemList .= '<tr>
        <td>' . htmlspecialchars($item['game']) . '</td>
        <td>' . htmlspecialchars($item['price']) . '</td>
        <td>' . intval($quantities[$item['game']]) . '</td>
        <td>' . htmlspecialchars($itemTotalPrice) . '</td></tr>';
        $totalPrice += $itemTotalPrice;
    }
    $itemList .= '<tr><td></td><td></td><td></td><td id="totalprice" colspan="4">'. $totalPrice . '</td></tr>';
    $itemList .= '<tr><td colspan="2" id="submit">
        <form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?emptyCart" method="post">
            <button type="submit">Empty cart</button>
        </form>
    </td>
    <td colspan="2" id="submit">
        <form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?checkout" method="post">
            <button type="submit">Checkout</button>
        </form>
    </td></tr>';
} else {
    $itemList .= '<li>Your cart is empty.</li>';
}

for($i = 0; $i < $showProductAmount; $i++){
	$loopedGames .= ' <article><span class="release">' . $gameProducts[$i]['date'] .
	'</span><img src="' . $gameProducts[$i]['img'] . '"alt=" '. $gameProducts[$i]['img'] . '" width="168" height="210">' .
	'<span class="console">' . $gameProducts[$i]['console'] . '</span>' .
	'<span class="name">' . $gameProducts[$i]['game'] .'</span>' .
	'<span class="price">' . $gameProducts[$i]['price'] . '</span>
    <form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?addToCart=' . $i . '" method="post">
    <button type="submit"><i class="fa-solid fa-basket-shopping"></i></button>
    </form></article>';
}
if (isset($_GET['emptyCart'])) {
    $_SESSION['shoppingCart'] = [];
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
if (isset($_GET['checkout'])) {
    setcookie('totalPrice', $totalPrice, time() + 3600);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>