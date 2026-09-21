<?php
    declare(strict_types=1);
    require('classes/Organisms/Fauna/Animal.php');
    require('classes/Organisms/Fauna/Human.php');
    require('classes/Organisms/Fauna/Dog.php');

    require('classes/Organisms/Flora/Plant.php');
    require('classes/Organisms/Flora/Bonsai.php');

    $human1 = new classes\Organisms\Fauna\Human('MBO', 'webDev', 22);
    $human2 = new classes\Organisms\Fauna\Human('MBO', 'CraneOp', 47);
    $dog1 = new classes\Organisms\Fauna\Dog('poodle', 5);

    $bonsai1 = new classes\Organisms\Flora\Bonsai(55, 'Sem');
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
                <p>human:</p>
                <?=$human1->getEdu()?>
                <?=$human1->getJob()?>
                <?=$human1->eat()?>
                <?=$human1->sayHello()?>

                <?=$human2->celebrateBirthday()?>
                <?=$human2->celebrateBirthday()?>
                <!-- verwijder spatie tussen:< ?=$human2->celebrateBirthday()?> -->

                <!-- verwijder spatie tussen:< ?=$human1->contemplateLife();?> -->
                <br><p>dog:</p>
                <?=$dog1->getBreed()?>
                <?=$dog1->eat()?>
                <?=$dog1->sayHello()?>

                <br><p>Birthday:</p>
                <?=$human1->celebrateBirthday()?>
                <?=$dog1->celebrateBirthday()?>

                <br><p>Bonsai:</p>
                <?=$bonsai1->whoAmI()?>
            </main>
        </div>
    </body>
</html>