<?php
// This script creates an associative array with grades for each year 
// and uses a foreach loop to display the grade for each year,

  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  // foreach loop here…
  foreach( $mymarks as $index => $value )
  {
    echo "for  $index  my grade was  $value <br/>";
  }
  // outputs a message displaying the best year
  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>



