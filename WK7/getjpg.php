<?php

$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");


// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
  //content type set to jpeg due to it being an image
  header("Content-type: image/jpeg");

  
  //get the image from the db
  $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	//execute query
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>
