<?php
require_once 'handler/monsterHandler.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/stylesheet.css">
        <title>Monsters</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="monsters-list">
    <?php
        echo '<h1>Monsters</h1>';
        echo $listOfNames;
    ?>
        </div>
    <?= $tableInfo ?? '';?>
    </body>

</html>