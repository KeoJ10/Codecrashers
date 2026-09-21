<link rel="stylesheet" href="css/stylesheet.css">
<?php
$xml = simplexml_load_file("xml/fleetwoodMac.xml");

if (isset($_POST['submit'])) {
    if (!empty($_POST['album']) && !empty($_POST['duration']) && !empty($_POST['tracks']) && !empty($_POST['songs'] && !empty($_POST['year']))) {
        $album = $xml->addChild('album');
        $album->addChild('title', htmlspecialchars($_POST['album']));
        $album->addChild('year', htmlspecialchars($_POST['year']));
        $album->addChild('duration', htmlspecialchars($_POST['duration']));
        $album->addChild('tracks', htmlspecialchars($_POST['tracks']));
        $album->addChild('songs', htmlspecialchars($_POST['songs']));
        $xml->asXML('xml/fleetwoodMac.xml');
    } else if (empty($_POST['album']) || empty($_POST['duration']) || empty($_POST['tracks']) || empty($_POST['songs'] || empty($_POST['year']))) {
        echo '<script>alert("Vul alle velden in!")</script>';
    }
    if (!empty($_POST['year'] < 1000 || $_POST['year'] > 2025)) {
        echo '<script>alert("Vul een geldig jaar in!")</script>';
    }
    if (!empty($_POST['tracks'] <= 0)) {
        echo '<script>alert("Vul een geldig aantal nummers in!")</script>';
    }
    if (!preg_match('/^\d{2}:\d{2}$/', $_POST['duration'])) {
        echo '<script>alert("Vul een geldige speeltijd in het formaat mm:ss in!")</script>';
    }
}
echo '<div class="container">';
echo '<h1>Fleetwood Mac</h1>';

echo '<table id="albums">';
echo '<thead><tr><th>Album</th><th>year</th><th>Afspeeltijd</th><th>Nummers</th><th>Delete</th></tr></thead>';
foreach ($xml->album as $index => $album) {
    echo '<tbody><tr>';
    echo '<td>' . $album->title . '</td>';
    echo '<td>' . $album->year . '</td>';
    echo '<td class="active-row">' . $album->duration . '</td>';
    echo '<td>' . $album->tracks . ', waaronder: ' . $album->songs .  '</td>';
    echo '<td>
        <form method="post">
            <input type="hidden" name="delete" value="' . $index . '">
            <button type="submit">Delete</button>
        </form>
    </td>';
    echo '</tr></tbody>';
}
echo '</table>';

if (isset($_POST['delete'])) {
    unset($xml->album[intval($_POST['delete'])]);
    $xml->asXML('xml/fleetwoodMac.xml');
}


echo '<form method="post" id="form">
    <label for="album">Album:</label><br>
    <input type="text" id="album" name="album"><br>
    <label for="year">Year:</label><br>
    <input type="number" id="year" name="year"><br>
    <label for="duration">Afspeeltijd:</label><br>
    <input type="time" id="duration" name="duration"><br>
    <label for="tracks">Aantal nummers:</label><br>
    <input type="number" id="tracks" name="tracks"><br>
    <label for="songs">Nummers:</label><br>
    <input type="text" id="songs" name="songs"><br><br>
    <input type="submit" value="submit" name="submit">
</form>';
echo '</div>';
