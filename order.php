<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='css/order.css'>
  <title>Document</title>
</head>
<body>
  <h1 style='text-align: center'>Wat wil je bestellen?</h1>

  <div class="container">
    <form method='post' action="handle_order.php">
      <label for="tuna">Sushi Tonijn: €2.95</label>
      <input type="number" name='tuna'><br><br>
      <label for="salmon">Sushi Zalm: €3.25</label>
      <input type="number" name='salmon'><br><br>
      <label for="cucumber">Sushi Komkommer: €1.95</label>
      <input type="number" name='cucumber'><br><br>
      <label for="fried-egg">Sushi Surimi: €4.95</label>
      <input type="number" name='fried-egg'><br><br>

      <button name='order-submit' type='submit'>Toevoegen</button>
    </form>
  </div>
</body>
</html>
