<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    require 'order.php'; 
    require 'Database.php';
    session_start();

    $_SESSION['tuna'] = $_POST['tuna'];
    $_SESSION['salmon'] = $_POST['salmon'];
    $_SESSION['cucumber'] = $_POST['cucumber'];
    $_SESSION['fried-egg'] = $_POST['fried-egg'];

    if(isset($_POST['order-submit'])) {
      if(is_numeric($_POST['tuna']) && is_numeric($_POST['salmon']) && is_numeric($_POST['cucumber']) && is_numeric($_POST['fried-egg'])) {
        $tuna = $_POST['tuna'];
        $salmon = $_POST['salmon'];
        $cucumber = $_POST['cucumber'];
        $friedEgg = $_POST['fried-egg'];
        
        $sum = $tuna + $salmon + $cucumber + $friedEgg;
        removeSushi($tuna, $salmon, $cucumber, $friedEgg);
        header("Location:overview.php");
      } else echo 'Niet alle velden zijn ingevuld.';
    } 
    
    function removeSushi($tuna, $salmon, $cucumber, $friedEgg) {
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM sushi");
      $query->execute();
      $sushis = $query->fetchAll(PDO::FETCH_ASSOC); 
      $inStock = array();
      $outOfStock = array();
      $i = 1;

      foreach($sushis as &$sushi) {    
        $sushiName = '$'.$sushi['sushi_name'];
        if($sushi['amount'] - '$[]' >= 0) {
          array_push($inStock, $sushi['sushi_name']);
        } else array_push($outOfStock, $sushi['sushi_name']);
      }
      
      foreach($sushis as &$sushi) {
        if(in_array($sushi['sushi_name'], $inStock)) {
          $query2 = $pdo->prepare("UPDATE sushi SET amount=amount-'${$sushi['sushi_name']}' WHERE sushi_id = $i"); 
          $query2->execute();
          $i++;
        } else echo $sushi['sushi_name'].' is niet meer op voorraad';
      }
    }
  ?>
  </body>
</html>