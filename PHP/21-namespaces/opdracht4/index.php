<?php
require_once __DIR__ . '/Codecrashers/Marco/Calculator.php';
require_once __DIR__ . '/Codecrashers/Patrick/Calculator.php';
use CodeCrashers\Marco\Calculator as MarcoCalculator;
use CodeCrashers\Patrick\Calculator as PatrickCalculator;

$marco = new MarcoCalculator();
$patrick = new PatrickCalculator();

$array = [10, 7, 13, 6];

$findHighest = $marco->findHighest($array);
$divide = $patrick->divide($findHighest, 3);
echo $divide;
?>