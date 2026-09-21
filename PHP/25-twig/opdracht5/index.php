<?php 
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, []);
$template = $twig->load('page.html');
echo $template->render(['title' => 'Opdracht 5', 'headerImage' => 'images/panda.jpg', 'backgroundImage' => 'images/background.jpg']);
?>
<!DOCTYPE html>
<html lang="en">
     	<head>
     		<meta charset="UTF-8">
     		<meta name="viewport" content="width=device-width, initial-scale=1.0">
     		<title>{{ title }}</title>
     	    <link rel="stylesheet" href="css/stylesheet.css">
        </head>
        <body>
        </body>
</html>
