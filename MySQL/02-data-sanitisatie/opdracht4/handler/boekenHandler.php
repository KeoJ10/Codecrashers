<?php
$server = 'localhost';
$user = 'Keo';
$pass = 'PHg22eKvQRPj6b';
$db = 'mysql_les2';

$dbh = new mysqli($server, $user, $pass, $db);
if ($dbh->connect_error){
	die('Verbinden mislukt: '.$dbh->connect_error);
}

$dbh->set_charset('utf8');
$boekQuery = "SELECT * FROM boeken";

$results = $dbh->query($boekQuery);
$boeken = $results->fetch_all(MYSQLI_ASSOC);

$listOfBooks = '<div class="boeken-columns"><table border="1">';
$listOfBooks .= '<tr>
    <th>ID</th>
    <th>Naam</th>
    <th>Auteur</th>
    <th>Verschijningsdatum</th>
    <th>Druk</th>
    <th>Taal</th>
    <th>Prijs</th>
    <th>Remove</th>
    <th>Edit</th>
</tr>';
foreach ($boeken as $boek) {
    $listOfBooks .= '<tr>';
    $listOfBooks .= '<td>' . htmlspecialchars($boek['id']) . '</td>';
    $listOfBooks .= '<td>' . htmlspecialchars($boek['naam']) . '</td>';
    $listOfBooks .= '<td>' . htmlspecialchars($boek['auteur']) . '</td>';
    $listOfBooks .= '<td>' . htmlspecialchars($boek['verschijningsdatum']) . '</td>';
    $listOfBooks .= '<td>' . htmlspecialchars($boek['druk']) . '</td>';
    $listOfBooks .= '<td>' . htmlspecialchars($boek['taal']) . '</td>';
    $listOfBooks .= '<td>' . htmlspecialchars($boek['prijs']) . '</td>';
    $listOfBooks .= '<td><a href="index.php?remove_id=' . htmlspecialchars($boek['id']) . '">Remove</a></td>';
    $listOfBooks .= '<td><a href="index.php?edit_id=' . htmlspecialchars($boek['id']) . '">Edit</a></td>';
    $listOfBooks .= '</tr>';
}
$listOfBooks .= '</table></div>';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['naam']) && isset($_POST['auteur']) && isset($_POST['verschijningsdatum']) && isset($_POST['druk']) && isset($_POST['taal']) && isset($_POST['prijs'])) {
    $naam = $_POST['naam'];
    $auteur = $_POST['auteur'];
    $verschijningsdatum = $_POST['verschijningsdatum'];
    $druk = $_POST['druk'];
    $taal = $_POST['taal'];
    $prijs = str_replace(',', '.', $_POST['prijs']);

    switch ($taal) {
        case 'Nederlands':
            $taal = 'nl';
            break;
        case 'Engels':
            $taal = 'en';
            break;
        case 'Frans':
            $taal = 'fr';
            break;
        case 'Latijn':
            $taal = 'la';
            break;
    }

    if ($verschijningsdatum < 1900 || $verschijningsdatum > date('Y')) {
        echo '<p>invalid year.</p>';
        exit;
    }

    $insertQuery = "INSERT INTO boeken (naam, auteur, verschijningsdatum, druk, taal, prijs) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($insertQuery);
    $stmt->bind_param('sssisd', $naam, $auteur, $verschijningsdatum, $druk, $taal, $prijs);

    if ($stmt->execute()) {
        header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
        exit;
    } else {
        echo '<p>Fout bij toevoegen van boek: ' . htmlspecialchars($stmt->error) . '</p>';
    }
}

if(isset($_GET['remove_id'])) {
    $boekId = $_GET['id'];
    $removeQuery = "DELETE FROM boeken WHERE id = ?";
    $stmt = $dbh->prepare($removeQuery);
    $stmt->bind_param('i', $boekId);
    if ($stmt->execute()) {
        header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
        exit;
    } else {
        echo '<p>Fout bij verwijderen van boek: ' . htmlspecialchars($stmt->error) . '</p>';
    }
}

if(isset($_GET['edit_id'])) {
    $editId = $_GET['edit_id'];
    $editQuery = "SELECT * FROM boeken WHERE id = ?";
    $stmt = $dbh->prepare($editQuery);
    $stmt->bind_param('i', $editId);
    $stmt->execute();
    $result = $stmt->get_result();
    $boek = $result->fetch_assoc();

    if ($boek) {
        echo '<form method="post" action="index.php?edit_id=' . htmlspecialchars($boek['id']) . '">';
        echo '<input type="text" name="naam" value="' . htmlspecialchars($boek['naam']) . '" required>';
        echo '<input type="text" name="auteur" value="' . htmlspecialchars($boek['auteur']) . '" required>';
        echo '<input type="number" name="verschijningsdatum" value="' . htmlspecialchars($boek['verschijningsdatum']) . '" required>';
        echo '<input type="text" name="druk" value="' . htmlspecialchars($boek['druk']) . '" required>';
        echo '<select name="taal">';
        echo '<option value="Nederlands"' . ($boek['taal'] === 'nl' ? ' selected' : '') . '>Nederlands</option>';
        echo '<option value="Engels"' . ($boek['taal'] === 'en' ? ' selected' : '') . '>Engels</option>';
        echo '<option value="Frans"' . ($boek['taal'] === 'fr' ? ' selected' : '') . '>Frans</option>';
        echo '<option value="Latijn"' . ($boek['taal'] === 'la' ? ' selected' : '') . '>Latijn</option>';
        echo '</select>';
        echo '<input type="number" name="prijs" value="' . htmlspecialchars($boek['prijs']) . '" step="0.01" min="0.01" max="1000" required>';
        echo '<button type="submit">Update</button>';
        echo '</form>';
    } else {
        echo '<p>Boek niet gevonden.</p>';
    }
}


?>