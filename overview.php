<?php
    session_start();

    $tuna = $_SESSION['tuna'];
    $salmon = $_SESSION['salmon'];
    $cucumber = $_SESSION['cucumber'];
    $friedEgg = $_SESSION['fried-egg'];
    $firstName = $_SESSION['firstname'];
    $lastName = $_SESSION['lastname'];

    $streetName = $_SESSION['streetname'];
    $houseNumber = $_SESSION['housenumber'];
    $zipcode = $_SESSION['zipcode'];
    $city = $_SESSION['city'];
    $adress = $streetName." ".$houseNumber;
    $total_price = ($tuna * 2.95) + ($salmon * 3.25) + ($cucumber * 1.95) + ($friedEgg * 4.95);           
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='css/overview.css'>
  <title>Document</title>
</head>
<body>
  <h1>Overzicht</h1>

  <div class="container">
    <p>Sushi Tonijn: <?php echo $tuna?> stuks <?php echo '- €'.number_format((float)$tuna * 2.95, 2, '.', '')?></p> 
    <p>Sushi Zalm: <?php echo $salmon?> stuks <?php echo '- €'.number_format((float)$salmon * 3.25, 2, '.', '')?></p>
    <p>Sushi Komkommer: <?php echo $cucumber?> stuks <?php echo '- €'.number_format((float)$cucumber * 1.95, 2, '.', '')?></p>
    <p>Sushi Surimi: <?php echo $friedEgg?> stuks <?php echo '- €'.number_format((float)$friedEgg * 4.95, 2, '.', '')?></p><hr>
    <p>Totaalprijs: <?php echo '€'.number_format((float)$total_price, 2, '.', '')?></p><hr>
    <p>Naam: <?php echo $firstName.' '.$lastName?></p>
    <p>Bezorgadres: <?php echo $adress.' '.$zipcode.' '.$city?></p>
  </div>
  
</body>
</html>