<?php

$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    echo '<ul>';
    for($i = 2; $i < 11; $i++){
        echo '<li>' . $months[$i] .'</li>';
    }
    echo '</ul>';
    
    echo '<ul>';
    for($i = 8; $i >= 4; $i--){
        echo '<li> ' . $months[$i] . '</li>';
    }
    echo '</ul>';
?>
