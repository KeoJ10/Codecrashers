<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['textsize'])) {
        $textSize = $_POST['textsize'];
    }
    if(!empty($_POST['textColor'])){
        $textColor = $_POST['textColor'];
    }
    if(!empty($_POST['backgroundColor'])){
        $backgroundColor = $_POST['backgroundColor'];
    }
    if(!empty($_POST['dropDown'])){
        $dropDown = $_POST['dropwDown'];
        echo 'dropwdown is empty';
    }
    if(!empty($_POST['shadow'])){
        $shadow = $_POST['shadow'];
    }
    }
?>

<html lang="en">
    <head>
        <title>Cookies</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
        body{
            font-size: <?=$textSize ?? '18';?>px;
            
        }
        p{
            color: <?=$textColor;?>;
        }
        </style>
    </head>
        <body>
            <form method="post" id="post">
            <label for="number">Textsize:
            <input type="number" id="textsize" name="textsize" min="12" max="20" value="<?=$textSize ?? '18';?>"></label><br><br>
            <label for="color">text color:
            <input type="color" name="textColor" id="textColor" value="<?=$textColor ?? 'black';?>"></label><br><br>
            <label for="color">backgroundColor:
            <input type="color" name="backgroundColor" id="backgroundColor" value="#f5f5dc"></label><br><br>
            <label for="dropdown">font-style:
            <select id="dropDown" name="dropwDown">
                <option value="Tahoma">Tahoma</option>
                <option value="italic">'Courier New', Courier, monospace</option>
                <option value="normal">sans-serif</option>
            </select></label><br><br>

            <label for="shadow">shadow:
                <input type="radio" name="shadow"><br><br>
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

<?php
    if(isset($_POST['submit'])){

if (!empty($backgroundColor)) {
    echo '<style> body{background-color:' . $backgroundColor. '}</style>';
}

if (!empty($dropDown)) {
    echo '<style>body{font-family:' . $dropDown. '}</style>';

}
if (!empty($shadow)) {
    echo '<style>img{box-shadow: 0px 4px 8px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #d6d6e73a;
    transform: translateY(-2px);}</style>';

}

setcookie($textColor);
}
?>