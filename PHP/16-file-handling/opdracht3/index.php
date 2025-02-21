<?php 
include('classes/logger.php');

$logMessage = '';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $logger = new classes\logger\logger('files/logboek.txt', 'a');
    $logMessage = $logger->addLog($name, $message);
}
    $reader = new classes\logger\logger('files/logboek.txt', 'r');
?>
<head>
    <link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>
<form method="post" action="">
    <label for="naam">Naam</label><br>
    <input type="text" name="name" id="name"></input><br><br>
    <label for="Bericht" id="message">Bericht</label><br>
    <textarea name="message"></textarea><br><br>
    <input type="submit" name="submit"></input>
</form>
<section>
<?php
    echo $reader->showLog();
?>
</section>

</body>