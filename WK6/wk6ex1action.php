<?php
// Connect to server and select database
$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into the database
$sql = "INSERT INTO test (name, email, phone_number) VALUES  ('$_POST[txtName]', '$_POST[txtEmail]', '$_POST[txtPhoneNumber]')";

if (mysqli_query($link, $sql)) {
    echo "New record inserted successfully.<br/>";
} else {
    echo "Error: " . mysqli_error($link);
}

// Display Records
$sql = "SELECT * FROM test";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[name]  $row[email]  $row[phone_number] <br/>";
}

//Close the connection
mysqli_close($link);
?>
