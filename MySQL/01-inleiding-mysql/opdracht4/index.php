<?php
require_once 'handler/snackbarHandler.php';
?>

<body>
<link rel="stylesheet" href="css/stylesheet.css">

<form method="get" action="">
    <input type="text" name="search" placeholder="Zoek snack..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
    <button type="submit"><img src="images/inspectorGlass.jpg" alt="vergrootglas"></button>
</form>
    <?php echo $output; ?>
</body>

