<?php 
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, []);

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$templateFile = '';
$data = [];

if (isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
} else {
    $id = 0;
}

switch ($id){
    case 1:
        $name = 'Lords of Waterdeep';
        $price = 39.99;
        $img = 'lords-of-waterdeep.jpg';
        break;
    case 2:
        $name = 'Joking Hazard';
        $price = 23.99;
        $img = 'joking-hazard.jpg';
        break;
    case 3:
        $name = 'Arkham Horror';
        $price = 43.99;
        $img = 'arkham-horror.jpg';
        break;
    case 4:
        $name = 'Smash Up';
        $price = 37.99;
        $img = 'smash-up.jpg';
        break;
    default:
        $name = 'Geen geldig product gekozen.';
        $price = 0.00;
        $img = 'no-product-found.png';
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
        $data = [ 'images' => $img, 'name' => $name, 'price' => $price, 'css' => '<link rel="stylesheet" href="./css/product.css">',  'links' =>  [
            ['id' => 1, 'name' => 'Lords of Waterdeep'],
            ['id' => 2, 'name' => 'Joking Hazard'],
            ['id' => 3, 'name' => 'Arkham Horror'],
            ['id' => 4, 'name' => 'Smash Up']
        ]];
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
?>