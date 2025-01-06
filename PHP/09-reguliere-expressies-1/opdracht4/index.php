<?php
$checkComplexity = [];
$warning = '';
$numbersList = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        array_push($checkComplexity, '<div class="warning">Warning: Input empty.<div>');
    } else {
        checkComplexity();
    }

    if (count($checkComplexity) > 0) {
        $warning = '<ul>';
        foreach ($checkComplexity as $error) {
            $warning .= '<li><p class="warning">' . $error . '</p></li>';
        }
        $warning .= '</ul>';
    }
}

function checkComplexity() {
    global $checkComplexity, $numbersList;
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];

        if (!preg_match('/[A-Z]/', $password)) {
            array_push($checkComplexity, 'Your Password must contain at least one uppercase letter.');
        }

        if (strlen($password) < 8) {
            array_push($checkComplexity, 'Your Password must contain at least 8 characters.');
        }

        if (preg_match_all('/[0-9]/', $password, $matches) < 2) {
            array_push($checkComplexity, 'Your Password must contain at least 2 numbers.');
        }

        if (empty($checkComplexity)) {
            array_push($checkComplexity, '<div id="success"> Successful registration! </div>');
        }

        if (!empty($matches[0])) {
            $numbersList = '<ul>';
            foreach ($matches[0] as $number) {
                $numbersList .= '<li>' . $number . '</li>';
            }
            $numbersList .= '</ul>';
        }
    }
}

?>

<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <form method="POST">
            <label for="username" id="username">Username</label><br>
            <input type="text" name="username" id="username"><br>
            <label for="password" id="password">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <input type="submit" name="submit" value="Submit"></input>
        </form>
        <?=$warning?>
        <div>
            <p>Numbers used in your password:</p>
            <?=$numbersList?>
        </div>
    </div>
</body>
</html>
