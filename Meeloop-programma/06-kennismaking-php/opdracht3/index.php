<?php
	require_once 'classes/cat.php';
    $cat = new cat('Darwin Nunez', 2, 'wit');
    $cat->meow();
    $cat->showInfo();
    $cat->ageing();
    $cat->showInfo();
?>