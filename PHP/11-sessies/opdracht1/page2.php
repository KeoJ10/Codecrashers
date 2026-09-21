
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page 2</title>
    </head>
    <body>
        <?php
        session_start();
        echo "<h1>Welkom " . ($_SESSION['name'] ? $_SESSION['name'] : "gast") . "</h1>";
        echo "<p>Je bent " . ($_SESSION['age'] ? $_SESSION['age'] : "onbekend") . " jaar oud.</p>";
        echo "<p>Je favoriete bands zijn:</p>";
        echo "<ul>";
        foreach ($_SESSION['favBands'] as $band) {
            echo "<li>" . ($band ? $band : "onbekend") . "</li>";
        }
        echo "</ul>";
        echo "session_id(): " . session_id();
        ?>
    </body>
</html>