<?php
require_once 'vendor/autoload.php';
require_once 'data/productData.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, []);

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$templateFile = '';
$data = [];

if (isset($_GET['id']) && array_key_exists($_GET['id'], $productData)) {
    $product = $_GET['id'];
} elseif(isset($_GET['id']) && !array_key_exists($_GET['id'], $productData)) {
    $product = 'not-found';
} else {
    $product = 'cart-empty';
}

switch ($page) {
    case 'contact':
        $templateFile = 'contact.html';
        $data = [
            'h1' => 'Contact',
            'p' => 'U kunt contact met ons opnemen op <a href="mailto:info@webshop.nl">info@webshop.nl</a>.',
        ];
        break;

    case 'product':
        $templateFile = 'product.html';
        $data = [
            'names' => $productLinks,
            'product' => $productData[$product],
            'h1' => $productData[$product]['name'],
            'image' => $productData[$product]['image'],
            'css' => 'product.css'
        ];
        break;

    case 'index':
    default:
        $templateFile = 'index.html';
        $data = [
            'h1' => 'Welkom',
            'p' => 'welkom op de pagina',
        ];
}

$template = $twig->load($templateFile);
echo $template->render($data);
