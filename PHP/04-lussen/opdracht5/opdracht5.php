<?php
$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

for($i = 2; $i < 11; $i++){
    printf('<ul> <li> ' . $months[$i] .'</li></ul>');
}

$start = 7;
$end = 4;

for($i = $start;; $i--){
    
    printf('<ul> <li> ' . $months[$i] . '</li></ul>');
    if ($i == $end) {
        break;
    }
}
?>
