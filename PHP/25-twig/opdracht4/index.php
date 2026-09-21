<?php
require_once 'vendor/autoload.php';
require_once 'classes/AlbumController.php';
require_once 'classes/AlbumModel.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, []);
$template = $twig->load('view.html');
$AlbumController = new AlbumController('xml/fleetwoodMac.xml');

if (isset($_POST['submit'])) {
    $AlbumController->addAlbum();
}
if (isset($_POST['delete'])) {
    $AlbumController->deleteAlbum();
}

$albums = $AlbumController->index();


echo $template->render(['albums' => $albums]);
