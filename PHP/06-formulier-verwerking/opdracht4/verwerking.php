<?php
$errors = [];
if (isset($_POST['submit'])) {
    if (!empty($_POST['fname'])) {
        $voornaam = htmlspecialchars($_POST['fname']);
    }
    if(!empty($_POST['man'])){
        $man = htmlspecialchars($_POST['man']);
    }
    if(!empty($_POST['vrouw'])){
        $vrouw = htmlspecialchars($_POST['vrouw']);
    }
    if(!empty($_POST['anders'])){
        $anders = htmlspecialchars($_POST['anders']);
    }
    if(!empty($_POST['woonplaats'])){
        $woonplaats = htmlspecialchars($_POST['woonplaats']);
    }
    if(!empty($_POST['postcode'])){
        $postcode = htmlspecialchars($_POST['postcode']);
    }
    if (!empty($_POST['provincies'])) {
        $provincies = htmlspecialchars($_POST['provincies']);
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <table>
    <?php
    if (isset($_POST['submit'])) {
        
        if (!empty($voornaam)) {
            echo '<tr><td> Naam:  </td><td><strong>' . $voornaam . '</strong> </td></tr>';
        }
        else{
            echo '<tr><td> Naam: </td><td> <strong>'. $errors[] = 'onbekend' . '</strong></td></tr>';
        }
        if (!empty($man)) {
            echo '<tr><td> geslacht: </td><td> <strong>' . $man . '</strong></td></tr>';
        }
		if (!empty($vrouw)) {
            echo '<tr> <td>geslacht: </td><td><strong>' . $vrouw . '</strong></td></tr>';
        }
		if (!empty($anders)) {
            echo '<tr><td> geslacht: </td> <td><strong>' . $anders . '</strong></td></tr>';
        }
        elseif(empty($_POST['anders']) && empty($_POST['man']) && empty($_POST['vrouw'])){
            echo '<tr><td> Geslacht: </td><td> <strong>'.$errors[] = 'onbekend' . '</strong></td></tr>';
        }
        
        if (!empty($woonplaats)) {
            echo '<tr><td> woonplaats: </td><td><strong> '. $woonplaats . '</strong></td></tr>';
        }
        else{
            echo '<tr><td> Woonplaats: </td><td> <strong>'.$errors[] = 'onbekend' . '</strong></td></tr>';
        }
        if (!empty($postcode)) {
            echo '<tr><td> postcode:</td><td><strong> '. $postcode . '</strong></td></tr>';
        }
        else{
            echo '<tr><td> Postcode: </td><td> <strong>'.$errors[] = 'onbekend' . '</strong></td></tr>';
        }
        if (!empty($provincies)) {
            echo '<tr><td> provincie:</td><td><strong> '. $provincies . '</strong></td></tr>';
        }
        elseif($provincies == ""){
            echo '<tr><td> provincie: </td><td> <strong>'.$errors[] = 'onbekend' . '</strong></td></tr>';
        }
    }
?>
        </table>
    </body>
</html>