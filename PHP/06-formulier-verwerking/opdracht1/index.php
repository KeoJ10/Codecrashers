<?php
$voornaam = $achternaam = $leeftijd = $datum = '';
$errors = [];

if (isset($_POST['fname'])) {
  if (!empty($_POST['fname'])) {
    $voornaam = $_POST['fname'];
  } else {
    $errors[] = 'u heeft geen voornaam op gegeven!';
  }

  if (isset($_POST['lname'])) {
    if(!empty($_POST['lname'])){
    $achternaam = $_POST['lname'];
  }
  else $errors[] = 'u heeft geen achternaam opgegeven!';
  }

  if (isset($_POST['age'])) {
    if(!empty($_POST['age'])){
    $leeftijd = $_POST['age'];
    }
  
  else $errors[] = 'u heeft geen leeftijd opgegeven!';
  }
  foreach ($errors as $error) {
    echo '<p class="red">' . $error . '</p>';
  }
}





if (isset($_POST['date'])) {
  $datum = $_POST['date'];
}

?>

<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="invoervelden">
    <form action="index.php" method="post">
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname"><br><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname"><br><br>
      <label for="age">age:</label><br>
      <input type="number" id="age" name="age"><br><br>
      <label for="date">date:</label><br>
      <input type="date" id="date" name="date"><br><br>
      <label for="kleur">kleur:</label><br>
      <input type="color" name="kleur" id="kleur"><br><br>
      <input type="submit" value="Submit">
    </form>
  </section>

  <?php
  if (!empty($voornaam) && !empty($achternaam)) {
    echo '<p> je naam is ' . $voornaam . ' ' . $achternaam . '</p>';
  }

  if (!empty($leeftijd)) {
    echo '<p> je leeftijd is ' . $leeftijd . '</p>';
  }

  if (!empty($datum)) {
    echo '<p> de datum is ' . $datum . '</p>';
  }
  ?>
</body>
</html>
