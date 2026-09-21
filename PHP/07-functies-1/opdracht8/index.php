<?php
include_once 'handler/indexhandler.php';
	error_reporting(E_ALL);
	ini_set('display_errors','on');
	

	
	$getal = 10;
	$total = addFive($getal) + addFive($getal) + addFive($getal);
	echo '<p>Orgineel: '.$getal.' - Nieuw: '.$total.'</p>';
?>
