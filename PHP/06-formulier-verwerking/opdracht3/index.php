<?php
if (isset($_POST['verzenden'])) {
    $errors = [];
    
    if (!empty($_POST['naam'])) {
        $naam = htmlspecialchars($_POST['naam']);
    } else {
        $errors[] = 'u heeft geen naam op gegeven!';
    }
	if(!empty($_POST['kinderen'])){
		$kinderen = htmlspecialchars($_POST['kinderen']);
	}
    
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
    } else {
        $errors[] = 'u heeft geen email opgegeven!';
    }
	if (!empty($_POST['nationaliteit'])) {
        $nationaliteit = htmlspecialchars($_POST['nationaliteit']);
    }
	if (!empty($_POST['staat'])) {
        $staat = htmlspecialchars($_POST['staat']);
	}
    if (!empty($_POST['nieuwsbrief'])) {
        $nieuwsbrief = htmlspecialchars($_POST['nieuwsbrief']);
    }
    
}
?>
<!DOCTYPE html>
<html lang="nl-NL">
<head>
    <meta charset="utf-8">
    <title>Registratieformulier</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <div id="container">
        <form action="index.php" method="post"> 
            <div class="form-row">
                <label for="naam">Naam:</label>
                <input type="text" name="naam" id="naam">
            </div>
            <div class="form-row">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-row">
                <label for="staat">Burgerlijke staat:</label>
                <select name="staat" id="staat">
                    <option>Ongehuwd</option>
                    <option>Gehuwd</option>
                    <option>Gescheiden</option>
                    <option>Verweduwd</option>
                </select>
            </div>
            <div class="form-row">
                <label for="kinderen">Aantal kinderen:</label>
                <input type="number" name="kinderen" id="kinderen" value="0">
            </div>
            <div class="form-row">
                <label for="nationaliteit">Nationaliteit:</label>
                <select name="nationaliteit" id="nationaliteit">
                    <option>Nederlandse</option>
                    <option>Belgische</option>
                    <option>Duitse</option>
                    <option>anders...</option>
                </select>
            </div>
            <div class="form-row">
                <label for="nieuwsbrief">
                    <input type="checkbox" name="nieuwsbrief" id="nieuwsbrief" value="ja"> Ik wil mij abonneren op de nieuwsbrief
                </label>
                <input type="submit" name="verzenden" value="verzenden">
            </div>
            <div class="form-row">
                <span>verplicht om in te vullen.</span>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['verzenden'])) {
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo '<p class="red">' . $error . '</p>';
            }
        }
		if($_POST['kinderen'] < 0){
			echo 'negatief aantal kinderen ingevuld!';
		}
        if (!empty($naam)) {
            echo '<p> Naam:  <strong>' . $naam . '</strong> </p>';
        }
        if (!empty($email)) {
            echo '<p> Email: <strong>' . $email . '</strong></p>';
        }
		if (!empty($nationaliteit)) {
            echo '<p> Uw bent: <strong>' . $nationaliteit . '</strong></p>';
        }
		if (!empty($staat)) {
            echo '<p> Uw staat: <strong>' . $staat . '</strong></p>';
        }
        if (!empty($nieuwsbrief)) {
            echo '<p> nieuwsbrief: <strong>' . $nieuwsbrief . ', ik wil mij abonneren op de nieuwsbrief</strong></p>';
        }
    }
    ?>
</body>
</html>
