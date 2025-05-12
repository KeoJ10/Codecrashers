<link rel="stylesheet" href="css/stylesheet.css">
<?php
require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();
echo '<table>';
for($i = 0; $i <= 12; $i++) {
    echo '<tr><td>'.$faker->name(). '</td>';
    echo '<td>'.$faker->company(). '</td>';
    echo '<td>'. $faker->jobTitle(). '</td></tr>';
}
echo '</table>';
for($i = 0; $i <= 6; $i++) {
    $paragraph = $faker->paragraph(15) . '<br><br>';
    echo '<p style="color:'. $faker->hexColor() .';">'.$paragraph.'</p>';
}
?>