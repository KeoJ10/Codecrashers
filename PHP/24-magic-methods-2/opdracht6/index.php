<?php

require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
        $chessboard = new chessBoard("red", "black", "50px", "50px", "4px solid black");
        echo $chessboard;
    ?>
    </table>
</body>
</html>