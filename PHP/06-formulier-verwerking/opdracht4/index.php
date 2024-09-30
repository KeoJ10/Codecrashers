<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="invoervelden">
    <form action="verwerking.php" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <input type="radio" id="man" name="man" value="man">
        <label for="man">man:</label>
        <input type="radio" id="vrouw" name="vrouw" value="vrouw">
        <label for="vrouw">vrouw:</label>
        <input type="radio" id="anders" name="anders" value="anders">
        <label for="anders">anders:</label><br><br>
        <label for="woonplaats">woonplaats:</label><br>
        <input type="text" id="woonplaats" name="woonplaats"><br><br>
        <label for="postcode">postcode:</label><br>
        <input type="text" id="postcode" name="postcode"><br><br>
        <label for="provincie">Provincie:</label><br>
        <select name="provincies" id="provincies" name="provincies">
        <option selected="selected"></option>
        <option value="Zuid-Hollad">Zuid-Holland</option>
        <option value="Noord-Hollad">Noord-Holland</option>
        <option value="Zeeland">Zeeland</option>
        <option value="Brabant">Brabant</option>
        <option value="Limburg">Limburg</option>
        <option value="Overijsel">Overijsel</option>
        <option value="Gelderland">Gelderland</option>
        <option value="Groningen">Groningen</option>
        <option value="Friesland">Friesland</option>
        <option value="Utrecht">Utrecht</option>
        <option value="Drenthe">Utrecht</option>
        <option value="Flevoland">Utrecht</option>

        </select>
        <input type="submit" value="submit" id="submit" name="submit">
    </form>
</section