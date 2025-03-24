<?php
//start session so previously stored session variables can be accessed
  session_start();
  //calculates total price
  $totalPrice = $_SESSION['selqty'] * $_SESSION['txtprice'];

  //displays order details and price
  echo "<h2>Your order qty is " . $_SESSION['selqty'] . "</h2><br/>";
  echo "<h2>The selected colour is $_POST[selcolour]</h2><br/>";
  echo "<h2>Price per widget: " . $_SESSION['txtprice'] . "</h2><br/>";
  echo "<h2>Total Price: $totalPrice</h2>";
?>
