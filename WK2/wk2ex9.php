<?php
  // This script creates an array with varying indexes and uses a foreach loop to display each index and its value.
  $topmodules[0] = "Internet Systems Development";
  $topmodules[5] = "Programming 1";
  $topmodules[10] = "Programming 2";
  $topmodules[30] = "OOAD";
  $topmodules[40] = "Software Engineering";

  // foreach loop here…
  foreach ($topmodules as $index => $value) {
    echo "Index is $index and value is $value <br/>";
  }
?>
