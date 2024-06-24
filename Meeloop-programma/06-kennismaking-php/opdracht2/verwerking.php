<?php

echo '<ul>
        <li>'.$_POST['fname'].'</li>
        <li>'.$_POST['ltijd'].'</li>
        <li>'.$_POST['mail'].'</li>
        <li>'.$_POST['wplaats'].'</li>
        <li>'.$_POST['datum'].'</li>
    </ul>';


$file = 'registration.txt';

$output2 = join(',',$_POST);
//$output = $_POST['fname']. ','.$_POST['ltijd'].','.$_POST['mail'].','.$_POST['datum'];

file_put_contents($file, $output2);



?>