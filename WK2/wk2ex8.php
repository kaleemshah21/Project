<?php
  //creates an array of modules and uses a for loop to output each module with its index.
  $topModules[0] = "Internet Systems Development";
  $topModules[1] = "Programming 1";
  $topModules[2] = "Programming 2";
  $topModules[3] = "OOAD";
  $topModules[4] = "Software Engineering";
  $topModules[5] = "Networking";
  $topModules[6] = "Web Apps";

  for($count = 0;$count < 7;$count++)
  {
    echo "$count module is $topModules[$count] <br/>";
  }	
?>

