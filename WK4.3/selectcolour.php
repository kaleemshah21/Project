<?php
//size stored in session variable
session_start();
$_SESSION['selsize'] = $_POST['selsize'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Select Colour Page</title>
</head>
<body>
  <!-- form for selecting colour, post to confirmation page -->
  <form action="confirmation.php" method="post">
    Select the colour for the <?php echo $_SESSION['selqty']; ?> <?php echo $_SESSION['selsize']; ?> widgets you are ordering:
    <!-- dropdown for colours -->
      <select name="selcolour">
      <option value="white">white</option>
      <option value="red">red</option>
      <option value="yellow">yellow</option>
      <option value="green">green</option>
      <option value="blue">blue</option>
    </select>
    <br/><br/>
    <!-- submit button -->
    <input type="submit" value="Buy"/>
  </form>
</body>
</html>