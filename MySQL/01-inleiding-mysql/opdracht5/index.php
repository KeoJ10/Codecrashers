<?php
require_once 'handler/movieHandler.php';
?>
<head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <table>
        <form method="GET" action="">
            <tr><th>Film<a href="index.php?sort=filmUp"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=filmDown" type="button"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>year<a href="index.php?sort=yearUp"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=yearDown"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>genre<a href="index.php?sort=genreUp"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=genreDown"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>rating<a href="index.php?sort=ratingUp"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=ratingDown"><i class="fa-solid fa-arrow-down-a-z"></i></a></th></tr>
        </form>
    <?php echo $output; ?>
    </table>
</body>