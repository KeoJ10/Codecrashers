<?php
    require_once 'classes/Animals.php';
	require_once 'classes/Cat.php';
    require_once 'classes/Dog.php';
    
    $cat = new cat('Darwin Nunez', 2, 'wit');
    $dog = new dog('Arthur Morgan', 7, 'shiba');
    $dog->bark();
    $cat->meow();
    $cat->ageing();
    $cat->showInfo();
    $dog->showInfo();
    

    

    
?>