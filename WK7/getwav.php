<?php
$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");


// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

  //content type set to wav because wav file will be outputted
  header("Content-type: audio/wav");

  //selecting the wav file
  $sql = "SELECT audio FROM monster WHERE id='" . $_GET['id'] ."';";
	//execute the query
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>
