<?php
include 'classes/blogHandler.php';
$blogHandler = new blogHandler('', '', '', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blogHandler = new blogHandler($_POST['title'], $_POST['author'], $_POST['date'], $_POST['content']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>blog</title>
</head>
<body>
    <section class="form">
        <form action="index.php" method="post">
            <h1>Blog</h1>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br><br>
            <label for="author">Author:</label><br>
            <input type="text" id="author" name="author"><br><br>
            <label for="date">The date:</label><br>
            <input type="date" id="date" name="date"><br><br>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="10" cols="30"></textarea><br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </section>
    <section class="blogs">
        <h1><?php echo $blogHandler->getTitle(); ?></h1>
        <p><?php echo $blogHandler->getAuthor(); ?></p>
        <p><?php echo $blogHandler->getDate(); ?></p>
        <p><?php echo $blogHandler->getContent(); ?></p>
    </section>
</body>
</html>