<?php
//started the session to access session variables
session_start();
//stores session variables in variables
$quantity = $_SESSION['selqty'];
$size = $_SESSION['selsize'];
$color = $_POST['selcolour'];

//set price to 0 initially
$price = 0;
//switch statement to set price based on the size that was chosen
switch ($size) {
  case "Small":
    $price = 15.75;
    break;
  case "Medium":
    $price = 16.75;
    break;
  case "Large":
    $price = 17.75;
    break;
  case "Extra Large":
    $price = 18.75;
    break;
}

//total price based on quantity and price
$totalPrice = $quantity * $price;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Confirmation</title>
</head>
<body>
  <!-- displays order details and price -->
  <h2>Your Order Details:</h2>
  <p>Quantity: <?php echo $quantity; ?></p>
  <p>Size: <?php echo $size; ?></p>
  <p>Colour: <?php echo $color; ?></p>
  <p>Price per Widget: £<?php echo number_format($price, 2); ?></p>
  <p>Total Price: £<?php echo number_format($totalPrice, 2); ?></p>
</body>
</html>