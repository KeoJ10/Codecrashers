<?php 

require_once 'classes/animal.php';
require_once 'classes/dog.php';
require_once 'classes/human.php';

$dog = new Dog(4, "Labrador");
$dog->setBreed("Golden Retriever");
$dog->eat();
$dog->celebrateBirthday();
$dog->sayHello();

echo "<br>";
echo "De hond is nu " . $dog->getAge() . " jaar oud en van het ras " . $dog->getBreed() . ".<br>";

$human = new Human(24, "Bachelor's Degree", "Web Developer");
$human->setAge(49);
$human->setEducation("Master's Degree");
$human->setJob("Software Developer");
$human->eat();
echo "<br>";

$human->sayHello();
echo "De mens is nu " . $human->getAge() . " jaar oud,";

