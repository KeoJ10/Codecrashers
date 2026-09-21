<?php
    declare(strict_types=1);

    namespace Sem\Toys;

    include('Sem/Toys/Dice.php');

    $dice1 = new Dice();
    $d20 = new Dice(20);

    print_r($dice1);
    echo '<br>';
    print_r($d20);

    echo '<br>';

    echo 'D6:<br>';
    echo 'dice roll: '.$dice1->roll().'<br>';
    echo 'dice roll: '.$dice1->roll().'<br>';
    echo 'dice roll: '.$dice1->roll().'<br>';
    echo 'dice roll: '.$dice1->roll().'<br>';
    echo 'dice roll: '.$dice1->roll().'<br>';

    echo 'D20:<br>';
    echo 'dice roll: '.$d20->roll().'<br>';
    echo 'dice roll: '.$d20->roll().'<br>';
    echo 'dice roll: '.$d20->roll().'<br>';
    echo 'dice roll: '.$d20->roll().'<br>';
    echo 'dice roll: '.$d20->roll().'<br>';
    echo 'er zijn inmiddels al ' . $dice1->amountRolled() . ' worpen gedaan<br>';
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <title>php base</title>
        <meta name="description" content="php base">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/stylesheet.css">
        <script src="js/script.js" defer></script>
    </head>
    <body>
        <div id="container">
            <main>
            </main>
        </div>
    </body>
</html>