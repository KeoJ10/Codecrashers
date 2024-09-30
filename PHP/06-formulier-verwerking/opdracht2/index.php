<?php
if (isset($_POST['submit'])) {
  $errors = [];
  if (!empty($_POST['fname'])) {
    $voornaam = $_POST['fname'];
  } else {
    $errors[] = 'u heeft geen voornaam op gegeven!';
  }

    if(!empty($_POST['lname'])){
    $achternaam = $_POST['lname'];
  }
  else {
    $errors[] = 'u heeft geen achternaam opgegeven!';
  }

    if(!empty($_POST['age'])){
    $leeftijd = $_POST['age'];
    }
  
  else {
    $errors[] = 'u heeft geen leeftijd opgegeven!';
  }

    if(!empty($_POST['date'])){
    $date = $_POST['date'];
    }
  
  else { $errors[] = 'u heeft geen datum opgegeven!';}

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
      <input type="submit" value="submit" id="submit" name="submit">
    </form>
  </section>

  <?php
  if(isset($_POST['submit'])){
    if(count($errors) > 0){
      foreach ($errors as $error) {
      echo '<p class="red">' . $error . '</p>';
}
}
  if (!empty($voornaam) && !empty($achternaam)) {
    echo '<p> je naam is ' . $voornaam . ' ' . $achternaam . '</p>';
  }

  if (!empty($leeftijd)) {
    if($_POST['age'] >= 0 && $_POST['age'] <= 150  )
    echo '<p> je leeftijd is ' . $leeftijd . '</p>';
  
}

  if (!empty($date)) {
    echo '<p> de datum is ' . $date . '</p>';
  }
}
  ?>
</body>
</html>
