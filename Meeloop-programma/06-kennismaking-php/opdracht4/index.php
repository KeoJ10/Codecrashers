<?php
	require_once 'classes/Cat.php';
    require_once 'classes/Dog.php';
    
    $cat = new cat('Darwin Nunez', 2, 'wit');
    $cat->meow();
    $cat->showInfo();
    $cat->ageing();
    $cat->showInfo();
    

    
?>