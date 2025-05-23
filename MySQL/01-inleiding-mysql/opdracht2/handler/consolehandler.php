<?php

$server = 'localhost';
$user = 'Keo';
$pass = 'PHg22eKvQRPj6b';
$db = 'mysql_les1';

$dbh = new mysqli($server, $user, $pass, $db);
if ($dbh->connect_error){
	die('Verbinden mislukt: '.$dbh->connect_error);
}else{
    echo 'Verbonden met de database';
}

$dbh->set_charset('utf8');
$row = "SELECT * FROM catalogus";
$result = $dbh->query($row);


echo '<table><tr><th>Naam</th><th>Prijs</th><th>Omschrijving</th><th>Categorie</th></tr>';
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $prijs = str_replace('.', ',', $row['prijs']);
        $prijs = '€' . $prijs;
        echo '<tr><td><strong>' . $row['naam'] . '</strong></td><td>' . $prijs . '</td><td> ' . $row['omschrijving'] . '</td><td> ' . $row['categorie'] . '</td></tr>';
    }
}
echo '</table>';
?>