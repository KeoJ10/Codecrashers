<?php 

namespace overerving\opdracht4;

require_once 'classes/animal.php';
require_once 'classes/dog.php';
require_once 'classes/human.php';

$myDog = new Dog(4, "Golden Retriever");
$myHuman = new human(42, "MBO", "Developer");
$myDog->celebrateBirthday();
$myHuman->sayHello();
$myDog->sayHello();
$myHuman2 = new human(47, "HBO", "Teacher");
$myHuman2->celebrateBirthday();
$myHuman2->celebrateBirthday();
$myHuman2->celebrateBirthday();

?>