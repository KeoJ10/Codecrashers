<?php

require_once 'handler/boekenHandler.php';

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Boeken</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        echo '<h1>Boeken</h1>';
        echo $listOfBooks;
    ?>
<div class=boeken-overview>
    <h2>Voeg een boek toe</h2>
    <form method="post">
        <input type="text" name="naam" placeholder="Naam" required>
        <input type="text" name="auteur" placeholder="Auteur" required>
        <input type="number" name="verschijningsdatum" placeholder="Verschijningsdatum" required>
        <input type="number" name="druk" placeholder="1" min="1">
        <input type="number" name="prijs" placeholder="Prijs" step="0.01" min="0.01" max="1000" required>
        <select name="taal" required>
            <option value="Nederlands">Nederlands</option>
            <option value="Engels">Engels</option>
            <option value="Frans">Frans</option>
            <option value="Latijn">Latijn</option>
        </select>
        <input type="submit" value="Voeg toe">
    </form>