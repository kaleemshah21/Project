<?php
//stores the quantity in a session variable
session_start();
$_SESSION['selqty'] = $_POST['selqty'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Select Size Page</title>
</head>
<body>
  <!-- form for selecting size -->
  <form action="selectcolour.php" method="post">
    Select the size for the <?php echo $_SESSION['selqty']; ?> widgets you are ordering:
    <!-- dropdown for the size -->
    <select name="selsize">
      <option value="Small">Small (£15.75)</option>
      <option value="Medium">Medium (£16.75)</option>
      <option value="Large">Large (£17.75)</option>
      <option value="Extra Large">Extra Large (£18.75)</option>
    </select>
    <br/><br/>
    <!-- submit button -->
    <input type="submit" value="Next"/>
  </form>
</body>
</html>