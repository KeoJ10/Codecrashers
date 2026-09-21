<?php
require_once 'vendor/autoload.php';

$connectToDB = new databaseHandler('localhost', 'Keo', 'PHg22eKvQRPj6b', 'mysql_les2');

// Handle movie operations directly
$connectToDB->handleMovieAddition($_POST);
$updateResult = $connectToDB->handleMovieUpdate($_POST);
if ($updateResult) {
    header("Location: index.php");
    exit();
}
$connectToDB->handleMovieDeletion($_GET);

// Get current limit for the sorting links
$limit = isset($_GET['LIMIT']) ? $_GET['LIMIT'] : '10';
?>
<head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <form method="GET" action="">
            <select type="select" name="LIMIT" id="LIMIT" placeholder="show amount">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="all">all</option>
            </select>
            <?php if (isset($_GET['sort'])): ?>
                <input type="hidden" name="sort" value="<?= htmlspecialchars($_GET['sort']) ?>">
            <?php endif; ?>
        <button type="submit">Zoeken</button><br><br>
    </form>
    <form method="POST" action="index.php">
        <label for="add">add a movie:</label><br>
        <input type="text" name="title" class="addMovie"></input>
        <input type="number" name="year" class="addYear" placeholder="year"></input>
        <input type="text" name="genre" class="addGenre" placeholder="genre"></input>
        <input type="number" step="0.1" name="rating" class="addRating" placeholder="rating"></input>
        <input type="text" name="extra_info" class="addExtraInfo" placeholder="extra info"></input>
        <button type="button" class="addExtraInfoButton" value="add extra info" name="info"></button>
        <?= $connectToDB->addExtraInfo(); ?>
        <button type="submit">Toevoegen</button>

    </form>
    <form method="GET" action="">
        <label for="search">Zoeken:</label>
        <input type="text" name="search" id="search" placeholder="Zoek op filmnaam..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
        
        <button type="submit" id="searchButton">Zoeken</button>
    </form>
    <?= $connectToDB->getMovieEditForm($_POST); ?>

    <table>
        <form method="GET" action="">
            <tr><th>Film<a href="index.php?sort=filmUp&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=filmDown&LIMIT=<?= htmlspecialchars($limit)?>" type="button"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>year<a href="index.php?sort=yearUp&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=yearDown&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>genre<a href="index.php?sort=genreUp&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=genreDown&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>rating<a href="index.php?sort=ratingUp&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-up-a-z"></i></a><a href="index.php?sort=ratingDown&LIMIT=<?= htmlspecialchars($limit)?>"><i class="fa-solid fa-arrow-down-a-z"></i></a></th>
            <th>extra info</th>
            <th>delete</th>
            <th>edit</th></tr>
        </form>
    <?php
        $search = $_GET['search'] ?? '';
        $sort = $_GET['sort'] ?? '';
        $limit = $_GET['LIMIT'] ?? '';

        $whereClause = $connectToDB->buildSearchClause($search);
        $orderClause = $connectToDB->buildSortClause($sort);
        $limitClause = $connectToDB->buildLimitClause($limit);

        echo $connectToDB->getMoviesTableOutput($whereClause, $orderClause, $limitClause);
    ?>
    </table>
</body>