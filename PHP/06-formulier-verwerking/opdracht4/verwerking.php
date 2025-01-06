<?php
$errors = [];
$voornaam;
$geslacht;
$woonplaats;
$postcode;
$provincies;
if (isset($_POST['submit'])) {
    if (!empty($_POST['fname'])) {
        $voornaam = htmlspecialchars($_POST['fname']);
    }
    if(!empty($_POST['geslacht'])){
        $geslacht = htmlspecialchars($_POST['geslacht']);
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
    else{
        header("Location: http://localhost/codecrashers/PHP/06-formulier-verwerking/opdracht4/index.php");
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
        
            echo '<tr><td> Naam:  </td><td><strong>' . ($voornaam ?? 'onbekend') . '</strong> </td></tr>';
        
            echo '<tr><td> geslacht: </td><td> <strong>' . ($geslacht ?? 'onbekend') . '</strong></td></tr>';
        
        
        
            echo '<tr><td> woonplaats: </td><td><strong> '.( $woonplaats ?? 'onbekend'). '</strong></td></tr>';
        
        
            echo '<tr><td> postcode:</td><td><strong> '. ($postcode ?? 'onbekend'). '</strong></td></tr>';

            echo '<tr><td> provincie:</td><td><strong> '. ($provincies ?? 'onbekend') . '</strong></td></tr>';
    
    }
?>
        </table>
    </body>
</html>