<?php
if (file_exists('logs/NL-vs-EU-stats.txt')){
	$handle = fopen('logs/NL-vs-EU-stats.txt', 'r+');
	
	while (!feof($handle)){
		echo fgets($handle).'<br>';
	}
	
	fclose($handle);
}
?>