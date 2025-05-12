<?php

$random1 = rand(1,10);
$random2 = rand(1,10);
$random3 = rand(1,10);
$random4 = rand(1,10);
$getallen = [$random1, $random2, $random3, $random4];



try {
    $i = 0;
    foreach($getallen as $getal) {
        if ($getal < 6) {
            $i++;
        }
    }
    if($i > 1){
        throw new Exception("<br>Onvoldoende<br>");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

function generateHash($string = 10,  $randomString = ''){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $string; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
            if(!preg_match('/[A-Z]/', $randomString)){
                throw new Exception("geen hoofdletters<br>");
            }
            elseif(!preg_match('/[a-z]/', $randomString)){
                throw new Exception("geen kleine letters<br>");
            }
            elseif(!preg_match('/[0-9]/', $randomString)){
                throw new Exception("geen cijfers<br>");
            }
            elseif(preg_match('/.\&\@]/i', $randomString)){
                throw new Exception("leestekens mogen niet<br>");
            }
    return $randomString;
}
try {
    $generatedHash = generateHash();
    echo $generatedHash;
}
catch (Exception $e) {
    echo $e->getMessage();
}
finally {
    file_put_contents('hash/hash.text', $generatedHash . PHP_EOL, FILE_APPEND);
}
?>