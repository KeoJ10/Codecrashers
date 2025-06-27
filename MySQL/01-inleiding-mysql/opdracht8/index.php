<?php
require_once 'handler/presidentHandler.php';
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="js/presidentJs.js"></script>
</head>
<body>
<div class="president-container">
    <?= $output ?>
</div>
<aside>
    <p>Presidents with an approval rate of 50% or higher: <strong> <?= $amount['count'] ?> </strong> </p>
    <p>average approval rate Democratic presidents: <strong> <?= $average['average'] ?></strong>% </p>
    <p>average approval rate Republican presidents: <strong> <?= $averageRep['average'] ?></strong>% </p>
    <p>Total days in office Democratic presidents: <strong> <?= $totalDaysInOfficeDem['total'] ?></strong> days</p>
    <p>Total days in office Republican presidents: <strong> <?= $totalDaysInOfficeRep['total'] ?> </strong></p>
    <p>President with the most days in office: <strong> <?= htmlspecialchars($mostDaysInOffice['name']) ?> </strong> with <strong> <?= $mostDaysInOffice['daysInOffice'] ?> </strong> days</p>
    <p>President with the least days in office: <strong> <?= htmlspecialchars($leastDaysInOffice['name']) ?> </strong> with <strong> <?= $leastDaysInOffice['daysInOffice'] ?> </strong> days</p>
</aside>
</body>