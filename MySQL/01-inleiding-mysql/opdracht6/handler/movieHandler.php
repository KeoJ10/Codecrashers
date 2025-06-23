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
$totalQuery = "SELECT name, year, genre, rating FROM movies";




$sorted = '';
$setLimit = '';
$limit = isset($_GET['LIMIT']) && $_GET['LIMIT'] !== 'all' ? intval($_GET['LIMIT']) : '';
    $sort = isset($_GET['sort']) ? $_GET['sort'] : '';


if (isset($_GET['sort']) || isset($_GET['LIMIT'])) {
    switch ($sort) {
        case 'filmDown':
            $sorted .= " ORDER BY name DESC";
            break;
        case 'yearDown':
            $sorted .= " ORDER BY year ASC";
            break;
        case 'genreDown':
            $sorted .= " ORDER BY genre DESC";
            break;
        case 'ratingDown':
            $sorted .= " ORDER BY rating ASC";
            break;
        case 'filmUp':
            $sorted .= " ORDER BY name ASC";
            break;
        case 'yearUp':
            $sorted .= " ORDER BY year DESC";
            break;
        case 'genreUp':
            $sorted .= " ORDER BY genre ASC";
            break;
        case 'ratingUp':
            $sorted .= " ORDER BY rating DESC";
            break;
    }
    
    if (isset($_GET['LIMIT']) && $_GET['LIMIT'] !== 'all') {
        if ($limit > 0) {
            $setLimit .= " LIMIT " . $limit;
        }
    } else {
        $setLimit = '';
    }
    $totalQuery .= $sorted . ' ' . $setLimit;
}



$search = isset($_GET['search']) ? $dbh->real_escape_string($_GET['search']) : '';
if ($search !== '') {
    $totalQuery .= " WHERE name LIKE '%$search%'";
}




$result = $dbh->query($totalQuery);
$movies = $result->fetch_all(MYSQLI_ASSOC);

$output = '';
foreach ($movies as $movie) {
    $output .= '<tr><td>' . htmlspecialchars($movie['name']) . '</td>
    <td>' . htmlspecialchars($movie['year']) . '</td>
    <td>' . htmlspecialchars($movie['genre']) . '</td>
    <td>' . htmlspecialchars($movie['rating']) . '</td></tr>';
}
