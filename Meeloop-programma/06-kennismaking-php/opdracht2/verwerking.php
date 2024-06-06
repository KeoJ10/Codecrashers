<?php

echo '<ul>
        <li>'.$_POST['fname'].'</li>
        <li>'.$_POST['ltijd'].'</li>
        <li>'.$_POST['mail'].'</li>
        <li>'.$_POST['wplaats'].'</li>
    </ul>';


$file = 'registration.txt';


$output = $_POST['fname']. ','.$_POST['ltijd'].','.$_POST['mail'].','.date(06,2024);

file_put_contents($file, $output);


?>