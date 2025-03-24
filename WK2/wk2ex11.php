<?php
// This script stores marks for different courses in an array, 
// calculates the total and average and displays each grade and the average mark.
    $mymarks["CO556"] = 75;
    $mymarks["CO557"] = 78;
    $mymarks["CO558"] = 74;
    $mymarks["CO559"] = 89;
    $mymarks["CO660"] = 97;
    $mymarks["CO661"] = 73;
    $total = 0;

    //loop through the array to calculate the total and output the mark for each module
    foreach ($mymarks as $index => $value) {

        $total = $total + $mymarks[$index];
        echo "for  $index  my grade was  $value <br/>";
    }
    //calculates and outputs the average
    $average = $total/6;
    echo "average mark is $average <br\>";



?>