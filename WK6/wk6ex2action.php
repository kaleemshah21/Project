<?php

// Connect to server and select database
$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");
$sql = "SELECT * from test where name = '$_GET[id]' ";
// Execute query
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>

	



<html>
<body>
	<!-- form to allow user to edit the details and sends the data to wk6ex2update.php via post method  -->
<form action="wk6ex2update.php" method="post">

	Name :
	<!-- readonly so the user cant edit the name -->
	<input type=text name="txtname" value="<?php echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type=text name="txttelno" value="<?php echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type=text name="txtemail" value="<?php echo $row['email'] ?>" />
	</br>
	<!-- submit button -->
	<input type=submit name="btnsubmit" value="save"/>
</form>
</body>
