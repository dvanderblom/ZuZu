<?php
require 'Database.php';
require 'send_info.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Document</title>
</head>
<body>
  <?php include_once 'jumbotron.php';?>
  
  <div class="container">
    
    
    <form name='customerinfo' method='post' action='send_info.php'>
      <label for="firstname">Voornaam: </label><br>
      <input name='firstname' type="text"><br><br>
      <label for="lastname">Achternaam: </label><br>
      <input type="text" name='lastname'><br><br>
      <label for="streetname">Straatnaam: </label><br>
      <input type="text" name='streetname'><br><br>
      <label for="housenumber">Huisnummer: </label><br>
      <input type="number" name='housenumber'><br><br>
      <label for="city">Plaats: </label><br>
      <input type="text" name='city'><br><br>
      <label for="zipcode">Postcode: </label><br>
      <input type="text" name='zipcode'><br><br>

      <button name='submit' type='submit'>Doorgaan</button>
    </form>
  </div>
</body>
</html>
