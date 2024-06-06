<?php

echo '<ul>
        <li>'.$_POST['fname'].'</li>
        <li>'.$_POST['ltijd'].'</li>
        <li>'.$_POST['mail'].'</li>
        <li>'.$_POST['wplaats'].'</li>
    </ul>';


$file = 'registration.txt';

$output = $_POST['fname']. ','.$_POST['ltijd'].','.$_POST['mail'].','.$_POST['wplaats'].date_date_set(2024,06,03);

file_put_contents($file, $output);


?>