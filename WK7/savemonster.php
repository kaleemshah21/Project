<?php
// Connect to server and select database
$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");


// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
//else {
    //echo "Database connected successfully!<br>";
//}




// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name']; 
$audio = $_FILES['monsteraudio']['tmp_name'];

  // Get the file binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
  $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
   
  $sql = "INSERT INTO monster";
  $sql .= "(name, image, audio) ";
  $sql .= "VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

  $result = mysqli_query($link, $sql);

   mysqli_close($link);
?>
