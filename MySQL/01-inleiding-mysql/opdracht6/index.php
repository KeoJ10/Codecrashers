<?php
require_once 'handler/movieHandler.php';
?>
<head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <form method="GET" action="">
        <?= $totalQuery; ?><br><br>
            <select type="select" name="LIMIT" id="LIMIT" placeholder="show amount">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="all">all</option>
            </select>
            <?php if (isset($_GET['sort'])): ?>
                <input type="hidden" name="sort" value="<?= htmlspecialchars($_GET['sort']) ?>">
            <?php endif; ?>
        <button type="submit">Zoeken</button>
    </form>

    <form method="GET" action="">
        <label for="search">Zoeken:</label>
        <input type="text" name="search" id="search" placeholder="Zoek op filmnaam..." value="<?php echo isset($_GET['search']) ?>">
        
        <button type="submit" id="searchButton">Zoeken</button>
    </form>

    <table>
        <form method="GET" action="">
            <tr><th>Film<a href="index.php?sort=filmUp&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=filmDown&LIMIT=<?= htmlspecialchars($limit)?>" type="button"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>year<a href="index.php?sort=yearUp&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=yearDown&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>genre<a href="index.php?sort=genreUp&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=genreDown&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>rating<a href="index.php?sort=ratingUp&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=ratingDown&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-down-a-z"></i></a></th></tr>
        </form>
    <?= $output; ?>
    </table>
</body>