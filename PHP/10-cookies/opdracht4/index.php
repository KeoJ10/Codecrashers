<?php
$textSize = '15';
$backgroundColor = '#f5f5dc';
$textColor = 'black';
$shadow = 'no';
    
$userInput = [];
$error = [];
if(isset($_COOKIE['userInput'])){
    $decode = json_decode($_COOKIE["userInput"], false);
    $textsize = $decode[0];
    $textColor = $decode[1];
    $backgroundColor = $decode[2];
    $dropDown = $decode[3];
    if(isset($decode[4])){
        $shadow = $decode[4];
    }
}
if(isset($_POST['submit'])) {
    if (!empty($_POST['textsize'])) {
        $textSize = $_POST['textsize'];
        array_push($userInput, $textSize);
    }
    if(!empty($_POST['textColor'])){
        $textColor = $_POST['textColor'];
        array_push($userInput, $textColor);
    }
    if(!empty($_POST['backgroundColor'])){
        $backgroundColor = $_POST['backgroundColor'];
        array_push($userInput, $backgroundColor);
    }
    if(!empty($_POST['dropDown'])){
        $dropDown = $_POST['dropDown'];
        array_push($userInput, $dropDown);
    }
    if(isset($_POST['shadow'])){
        $shadow = $_POST['shadow'];
        array_push($userInput, $shadow);
    }
    $favSettings = json_encode($userInput);
    setcookie("userInput", $favSettings, time() + (86400 * 30), "/");
    }
?>

<html lang="en">
    <head>
        <title>Cookies</title>
        <link rel="stylesheet" href="css/style.css">
                <style>
        body{
            font-size: <?=$textSize;?>px;
            font-family: <?=$dropDown;?>;
            background-color: <?=$backgroundColor;?>;
        }
        p{
            color: <?=$textColor;?>;
        }
        img{ <?php if($shadow == 'on') echo 'filter: drop-shadow(0px 0px 15px purple);';?>}
        </style>
    </head>
        <body>
            <form method="post" id="post">
            <label for="number">Textsize:
            <input type="number" id="textsize" name="textsize" min="12" max="20" value="<?=$textSize;?>"></label><br><br>
            <label for="color">text color:
            <input type="color" name="textColor" id="textColor" value="<?=$textColor;?>"></label><br><br>
            <label for="color">backgroundColor:
            <input type="color" name="backgroundColor" id="backgroundColor" value="<?=$backgroundColor;?>"></label><br><br>
            <label for="dropdown">font-family:
            <select id="dropDown" name="dropDown">
                <option value="Tahoma">Tahoma</option>
                <option value="Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Franklin Gothic Medium</option>
                <option value="sans-serif">sans-serif</option>
            </select></label><br><br>
            <label for="shadow">shadow:
                <input type="radio" name="shadow" value="on"><br><br>
            </label>
            <input type="submit" value="verander style" id="submit" name="submit"><br><br>
            </form>
            
        <h1>De kat die van cookies hield</h1>
        <p>Style never met and those among great. At no or september sportsmen he perfectly happiness attending. </p>
            <p>Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if.
            Law use assistance especially resolution cultivated did out sentiments unsatiable. </p>
            <p>Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.
            As am hastily invited settled at limited civilly fortune me. Really spring in extent an by.</p>
            <p>Judge but built gay party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.
            Turned it up should no valley cousin he. Speaking numerous ask did horrible packages set. </p>
            <p>Ashamed herself has distant can studied mrs. Led therefore its middleton perpetual fulfilled provision frankness. Small he drawn after among every three no. All having but you edward genius though remark one.</p>
        </p>
        <img src="images/pusheen-cookie.png" alt="cookies kat">
    </body>
</html>