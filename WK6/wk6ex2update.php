<?php
$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

//stores the name, telephone number and email in variables
$name = $_POST['txtname'];
$phone = $_POST['txttelno'];
$email = $_POST['txtemail'];

//sql query
$sql = "UPDATE test SET phone_number = '$phone', email = '$email' WHERE name = '$name'";

if (mysqli_query($link, $sql)) {
    echo "Record updated successfully. <a href='wk6ex2.php'>Go Back</a>";
} else {
    echo "Error updating record: " . mysqli_error($link);
}

// Close the connection
mysqli_close($link);
?>
