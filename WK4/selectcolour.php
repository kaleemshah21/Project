<?php
// start session to store quantity and price 
  session_start();
  $_SESSION['selqty'] = $_POST['selqty'];
  $_SESSION['txtprice'] = $_POST['txtprice'];
?>
<html>
  <head><title>Select colour page</title></head>
  <body>
    <!-- form for selecting colour -->
    <form action="confirmation.php" method="post">
      Select the colour for the <?php echo $_POST['selqty']; ?> widgets you are ordering
      <!-- dropdown for colours -->
      <select name="selcolour">
        <option>white</option>
        <option>red</option>
        <option>yellow</option>
        <option>green</option>
        <option>blue</option>
      </select>
      <br/><br/>
      <!-- submit button -->
      <input type="submit" value="Buy"/>
    </form>
  </body>
</html>
