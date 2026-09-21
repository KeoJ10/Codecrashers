<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inloggen</title>
    </head>
    <body>
        <h1>Inloggen</h1>
        
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <p>Welkom terug <?= htmlspecialchars($_SESSION['name']) ?>!</p>
            <form action="index.php" method="post">
                <input type="submit" name="submit" value="Uitloggen">
            </form>
        <?php else: ?>
            <form action="index.php" method="post">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" name="submit" value="Inloggen">
            </form>
        <?php endif; ?>
    </body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] === 'Uitloggen') {
            // Handle logout
            session_unset();
            session_destroy();
            session_start(); // Restart session for clean state
            echo "<p>Je bent uitgelogd.</p>";
        } elseif ($_POST['submit'] === 'Inloggen') {
            // Handle login
            include_once 'config.php';
            
            $inputName = $_POST['name'];
            $inputPassword = $_POST['password'];
            
            if ($inputName === $_SESSION['name'] && $inputPassword === $_SESSION['password']) {
                $_SESSION['name'] = $inputName;
                $_SESSION['loggedin'] = true;
                echo "<p>Inloggen succesvol! Welkom, " . htmlspecialchars($inputName) . ".</p>";
            } else {
                echo "<p>Inloggen mislukt! Ongeldige naam of wachtwoord.</p>";
                $_SESSION['loggedin'] = false;
            }
        }
    }
}