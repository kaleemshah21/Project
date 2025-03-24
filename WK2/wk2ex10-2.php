<?php
  //creates an array for marks across different years, then displays the data in an HTML table.
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

?>

<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Year</th><th>Grade</th></tr> 
<?php
  //foreach loop to iterate over the array and display each year and grade in the table.
  foreach( $mymarks as $index => $value )
  {
    
    echo "<tr><td>$index</td><td>$value</td></tr>";
    
  }	
?>
</table>
</body>
</html>

