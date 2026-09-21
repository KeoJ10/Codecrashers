<?php
$server = 'localhost';
$user = 'Keo';
$pass = 'PHg22eKvQRPj6b';
$db = 'mysql_les1';

$dbh = new mysqli($server, $user, $pass, $db);
if ($dbh->connect_error){
    die('Verbinden mislukt: '.$dbh->connect_error);
}

$dbh->set_charset('utf8');

if (isset($_GET['show']) && $_GET['show'] === "1") {
    $sql = "SELECT naam, prijs, omschrijving, categorie, actief FROM catalogus WHERE actief = 1 ORDER BY prijs DESC";
} else {
    $sql = "SELECT * FROM catalogus ORDER BY prijs DESC";
}


$result = $dbh->query($sql);


if ($result) {
    while ($row = $result->fetch_assoc()) {
        $prijs = str_replace('.', ',', $row['prijs']);
        $sortPrices = '€' . $prijs;
        echo '<tr><td><strong>' . $row['naam'] . '</strong></td><td>' . $sortPrices . '</td><td> ' . $row['omschrijving'] . '</td><td> ' . $row['categorie'] . '</td></tr>';
    }
}

?>