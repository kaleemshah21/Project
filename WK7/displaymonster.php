<?php
// $link = mysqli_connect("localhost", "root", "", "db1_gwalke01");


// Check connection
// if (!$link) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "select id from monster;";

// $result = mysqli_query($link, $sql);
// $row = mysqli_fetch_array($result);

// echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

// mysqli_close($link);

?>




<html>
<head></head>
<body>

<?php
  //connect to db
  $link = mysqli_connect("localhost", "root", "", "db1_gwalke01");


    //Check connection
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

//sql query
$sql = "select id,name from monster;";

//execute the query
$result = mysqli_query($link, $sql);


echo "<table align='center' border='1'>";
echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

//loop through the result and output each row
while($row = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td><a href='getwav.php?id=" . $row['id']. "'>Click to play</a></td>";
  echo "<td><img src='getjpg.php?id=" . $row['id']. "' height='100' width='100'</td>";
  echo "</tr>";
}

echo "</table>";
//close the db
mysqli_close($link);
?>





