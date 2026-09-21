<?php 
include('classes/logger.php');
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, []);
$template = $twig->load('page.html');
$logMessages = [];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $logger = new classes\logger\logger('files/logboek.txt', 'a');
    $logMessages[] = $logger->addLog($name, $message);
}
$reader = new classes\logger\logger('files/logboek.txt', 'r');
$logContents = $reader->showLog();

echo $template->render(['logContents' => $logContents, 'logMessages' => $logMessages]);
?>