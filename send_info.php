<?php
require 'Database.php';
session_start();

if(isset($_POST['submit'])) {
  $_SESSION['firstname'] = $_POST['firstname'];
  $_SESSION['lastname'] = $_POST['lastname'];
  $_SESSION['zipcode'] = $_POST['zipcode'];
  $_SESSION['streetname'] = $_POST['streetname'];
  $_SESSION['housenumber'] = $_POST['housenumber'];
  $_SESSION['city'] = $_POST['city'];

  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];
  $streetName = $_POST['streetname'];
  $houseNumber = $_POST['housenumber'];
  $zipcode = $_POST['zipcode'];
  $city = $_POST['city'];
  $adress = $streetName." ".$houseNumber;
 
  sendInfo($firstName, $lastName, $adress, $zipcode, $city);
  include_once('order.php');
} 

function sendInfo($firstName, $lastName, $adress, $zipcode, $city) {
  global $pdo;
  $query = $pdo->prepare("INSERT INTO customer (customer_id, first_name, last_name, adress, zipcode, city) 
  VALUES ('DEFAULT', '$firstName', '$lastName', '$adress', '$zipcode', '$city')");
  $query->execute();
}
?>