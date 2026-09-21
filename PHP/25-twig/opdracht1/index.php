<?php
require_once 'vendor/autoload.php';
include_once 'pages/data.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, []);
$template = $twig->load('page.html');

if (isset($_GET['page']) && array_key_exists($_GET['page'], $data)){
    $page = $_GET['page'];
} else {
    $page = 'index.php';
}
    $h1 =  $data[$page]['h1'];
    $p = $data[$page]['p'];
    $img = $data[$page]['img'];
    $pages = array_keys($data);
    echo $template->render([ 'h1' => $h1, 'p' => $p, 'img' => $img, 'pages' => $pages]);
?>
