<?php 
require_once 'classes/Users.php';
use classes\users\User;


$user = new User('Keo', 'Keo123', 'keo@rcn-heliomare.nl', 21, true);

$user2 = new User('Melvin', 'Melvin123', 'Melvin@rcn-heliomare.nl', 21, false);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/stylesheet.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form method="post">
    <input type="text" name="name" id="name" placeholder="Name">
    <input type="text" name="password" id="password" placeholder="Password">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="text" name="age" id="age" placeholder="Age">
    <input type="checkbox" name="active" id="active" placeholder="Active">
    <button type="submit" name="submit">Submit</button>
</form>
<hr>
<?php
echo $user->showUser();
echo $user2->showUser();
if(isset($_POST['submit'])){
    $active = isset($_POST['active']) ? true : false;
    $user3 = new User($_POST['name'], $_POST['password'], $_POST['email'], $_POST['age'], $active);
    echo $user3->showUser();
}
?>
</body>
</html>
