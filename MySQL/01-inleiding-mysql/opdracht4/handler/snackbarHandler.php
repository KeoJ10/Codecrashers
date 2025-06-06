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

$search = isset($_GET['search']) ? $dbh->real_escape_string($_GET['search']) : '';

$query = "SELECT * FROM snackbar";
if ($search !== '') {
    $query .= " WHERE name LIKE '%$search%'";
}
if($search == '') {
    $query .= " ORDER BY name ASC";
}


$snackbarItems = [];
$result = $dbh->query($query);

while ($row = $result->fetch_object()) {
    $snackbarItems[] = $row;
}

if ($result->num_rows == 0) {
    $output = '<p>Geen snacks gevonden.</p>';
}else{
    $output = '<h1>Menukaart</h1><ul>';
    foreach ($snackbarItems as $snackbarItem) {
    $prices = str_replace('.', ',', $snackbarItem->price);
    $output .= '<li>' . htmlspecialchars($snackbarItem->name) . ' - $' . $prices . '</li>';
}
$output .= '</ul>';
}