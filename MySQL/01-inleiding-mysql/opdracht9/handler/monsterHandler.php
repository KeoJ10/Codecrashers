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
$monsterQuery = "SELECT * FROM monsters";

$results = $dbh->query($monsterQuery);
$monsters = $results->fetch_all(MYSQLI_ASSOC);

$chunks = array_chunk($monsters, 29);
$listOfNames = '<div class="monster-columns">';
$start = 1;
foreach ($chunks as $chunk) {
    $listOfNames .= '<ol start="' . $start . '">';
    foreach ($chunk as $monster) {
        $listOfNames .= '<li><a href="index.php?info=' . $monster['ID'] . '">' . htmlspecialchars($monster['Name']) . '</a></li>';
    }
    $listOfNames .= '</ol>';
    $start += count($chunk);
}
$listOfNames .= '</div>';


if (isset($_GET['info'])) {
    $monsterId = $_GET['info'];
    $monsterInfoQuery = "SELECT * FROM monsters WHERE ID = ?";
    $stmt = $dbh->prepare($monsterInfoQuery);
    $stmt->bind_param('i', $monsterId);
    $stmt->execute();
    $result = $stmt->get_result();
    $monsterInfo = $result->fetch_assoc();
    $tableInfo = '';
    $tableInfo .= '<table class="monster-table">';
    if ($monsterInfo) {
        $tableInfo .= '<tr><td>Health </td><td>' . htmlspecialchars($monsterInfo['HP']) . '</td></tr>';
        $tableInfo .= '<tr><td>Mana points</td><td> ' . htmlspecialchars($monsterInfo['MP']) . '</td></tr>';
        $tableInfo .= '<tr><td>Attack</td><td> ' . htmlspecialchars($monsterInfo['ATT']) . '</td></tr>';
        $tableInfo .= '<tr><td>defense</td><td> ' . htmlspecialchars($monsterInfo['DEF']) . '</td></tr>';
        $tableInfo .= '<tr><td>intelligence </td><td>' . htmlspecialchars($monsterInfo['INT']) . '</td></tr>';
        $tableInfo .= '<tr><td>Agility</td><td> ' . htmlspecialchars($monsterInfo['AGIL']) . '</td></tr>';
        $tableInfo .= '<tr><td>experience</td><td> ' . htmlspecialchars($monsterInfo['EXP']) . '</td></tr>';
        $tableInfo .= '<tr><td>money</td><td> ' . htmlspecialchars($monsterInfo['Money']) . '</td></tr>';
        $tableInfo .= '<tr><td>drop</td><td> ' . htmlspecialchars($monsterInfo['Drop']) . '</td></tr>';
        $tableInfo .= '<tr><td>rate</td><td> ' . htmlspecialchars($monsterInfo['Rate']) . '</td></tr>';
        $tableInfo .= '</table>';
    } else {
        echo '<p>Monster not found.</p>';
    }
}
