<?php
     $lottodate = date("Ymd");
     echo "The lottery numbers for $lottodate are ";
     for($n=1;$n<7;$n++){
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
     }
     //connect to db
     $link = mysqli_connect("localhost", "root", "", "db1_gwalke01");
     //sql query 
     $sql = "insert into lotto (lottodate,number1,number2,";
     $sql = $sql . "number3,number4,number5,number6)";
     $sql = $sql . " values ($lottodate,$number[1],$number[2],";
     $sql = $sql . "$number[3],$number[4],$number[5],$number[6]);";

     $result = mysqli_query($link, $sql);
     echo "<br/>This weeks numbers have been saved";

?>
