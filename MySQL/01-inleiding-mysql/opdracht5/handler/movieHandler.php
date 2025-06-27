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

$query = "SELECT name, year, genre, rating FROM movies";

if(isset($_GET['sort'])) {
    $sort = $_GET['sort'];
    switch ($sort) {
        case 'filmDown':
            $query .= " ORDER BY name DESC";
            break;
        case 'yearDown':
            $query .= " ORDER BY year ASC";
            break;
        case 'genreDown':
            $query .= " ORDER BY genre DESC";
            break;
        case 'ratingDown':
            $query .= " ORDER BY rating ASC";
            break;
        case 'filmUp':
            $query .= " ORDER BY name ASC";
            break;
        case 'yearUp':
            $query .= " ORDER BY year DESC";
            break;
        case 'genreUp':
            $query .= " ORDER BY genre ASC";
            break;
        case 'ratingUp':
            $query .= " ORDER BY rating DESC";
            break;
    }
}

$result = $dbh->query($query);
$movies = $result->fetch_all(MYSQLI_ASSOC);

$output = '';
foreach ($movies as $movie) {
    $output .= '<tr><td>' . htmlspecialchars($movie['name']) . '</td>
    <td>' . htmlspecialchars($movie['year']) . '</td>
    <td>' . htmlspecialchars($movie['genre']) . '</td>
    <td>' . htmlspecialchars($movie['rating']) . '</td></tr>';
}