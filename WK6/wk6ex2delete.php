<?php
// Connect to database
$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");


if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

//gets the id 
$id = isset($_GET['id']) ? mysqli_real_escape_string($link, $_GET['id']) : '';


if ($id) {
    $sql = "DELETE FROM test WHERE name = '$id'";

    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully. <a href='wk6ex2.php'>Go Back</a>";
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
} else {
    echo "No record selected for deletion.";
}

// Close connection
mysqli_close($link);
?>
