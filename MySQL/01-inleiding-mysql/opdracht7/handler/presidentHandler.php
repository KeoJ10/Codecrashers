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
$presidentQuery = "SELECT id, name , party, startYear, endYear, daysInOffice, approvalRate, imageURL FROM presidents";


$results = $dbh->query($presidentQuery);
$presidents = $results->fetch_all(MYSQLI_ASSOC);

$output = '';




foreach ($presidents as $row) {
    $partyColor = htmlspecialchars($row['party']) == 'Democratic' ? 'rgba(0, 136, 255, 0.9)' : 'rgb(255, 13, 0, 0.9)';
    $approvalRate = htmlspecialchars($row['approvalRate']) > 50 ? '4px solid gold' : '';
    $output .= '<article class="president-list" id="president-' . htmlspecialchars($row['name']) . '" style="background-color: ' . $partyColor . '; border: ' . $approvalRate . ';">';
    $output .= '<div class="president-list-content">';
    $output .= '<h2>' . htmlspecialchars($row['name']) . '</h2>';
    $output .= '<p> ' . htmlspecialchars($row['startYear']) . ' - ' . htmlspecialchars($row['endYear']) . '</p>';
    $output .= '<p>' . htmlspecialchars($row['party']) . ' party <br>';
    $output .=  'Days in office: ' . htmlspecialchars($row['daysInOffice']) . '<br>';
    $output .= 'Approval Rate: ' . htmlspecialchars($row['approvalRate']) . '%</p>';
    $output .= '</div>';
    $output .= '<img src="images/' . htmlspecialchars($row['imageURL']) . '" alt="President Image" class="president-image">';
    $output .= '</article>';
}

?>