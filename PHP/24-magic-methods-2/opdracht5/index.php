<?php

include_once 'classes/employee.php';
include_once 'classes/office.php';

$employee = new employee("red");

$employee2 = clone $employee;
$employee2->setImployeeid(432);
$employee2->setTieColor("green");
$employee3 = clone $employee;
$employee3->setImployeeid(89);
$employee3->setTieColor("blue");

$office = new Office("Utrecht", "ICT", [$employee, $employee2, $employee3]);

$office2 = clone $office;
$office2->setLocation("Amsterdam");
$office2->officeTieChange("yellow");
$office3 = clone $office;
$office3->setLocation("Rotterdam");
$office3->officeTieChange("black");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offices</title>
</head>
<body>
    <h1>Office 1</h1>
    <p>Location: <?php echo $office->getLocation(); ?></p>
    <p>Sector: <?php echo $office->getSector(); ?></p>
    <h2>Employees:</h2>
    <ul>
        <?php foreach ($office->getEmployees() as $emp): ?>
            <li>Employee ID: <?php echo $emp->getImployeeid(); ?>, Tie Color: <?php echo $emp->getTieColor(); ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Office 2</h1>
    <p>Location: <?php echo $office2->getLocation(); ?></p>
    <p>Sector: <?php echo $office2->getSector(); ?></p>
    <h2>Employees:</h2>
    <ul>
        <?php foreach ($office2->getEmployees() as $emp): ?>
            <li>Employee ID: <?php echo $emp->getImployeeid(); ?>, Tie Color: <?php echo $emp->getTieColor(); ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Office 3</h1>
    <p>Location: <?php echo $office3->getLocation(); ?></p>
    <p>Sector: <?php echo $office3->getSector(); ?></p>
    <h2>Employees:</h2>
    <ul>
        <?php foreach ($office3->getEmployees() as $emp): ?>
            <li>Employee ID: <?php echo $emp->getImployeeid(); ?>, Tie Color: <?php echo $emp->getTieColor(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>