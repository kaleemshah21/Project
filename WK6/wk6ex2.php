<head>
    <style>
        /* basic styling to remove the default blue and underline css */
        a {
            text-decoration: none;
            color: black; 
        }
        
        a:hover {
            color: blue; /
        }
    </style>
</head>



<?php	

	// Connect to server and select database
    $link = mysqli_connect("localhost", "root", "", "db1_gwalke01");
	$sql = "SELECT * from test";
	// Execute sql statement
    $result = mysqli_query($link, $sql);
	
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a>";  	
      echo "&nbsp;"; //space
      echo "&nbsp;";
      echo "&nbsp;";
      echo "<a href=\"wk6ex2delete.php?id=" . urlencode($row['name']) . "\" onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a><br/>";
    
}
?>
</body>
</html>
