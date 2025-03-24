

<?php
$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if selweek is set in the $_POST array
if (isset($_POST['selweek'])) {
    $selweek = mysqli_real_escape_string($link, $_POST['selweek']);
    $sql = "SELECT * FROM lotto WHERE wk='$selweek';";
    $result = mysqli_query($link, $sql);

    if ($result && $row = mysqli_fetch_array($result)) {
        echo "Number 1 is $row[number1]<br/>";
        echo "Number 2 is $row[number2]<br/>";
        echo "Number 3 is $row[number3]<br/>";
        echo "Number 4 is $row[number4]<br/>";
        echo "Number 5 is $row[number5]<br/>";
        echo "Number 6 is $row[number6]<br/>";
    } else {
        echo "No results found for the selected week.";
    }
} else {
    // If selweek is not set, display the form, this was causing a warning
    $sql = "SELECT * FROM lotto;";
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "<form action='{$_SERVER['PHP_SELF']}' method='post'>";
        echo "<br/>Select the lottery week ";
        echo "<select name='selweek'>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='$row[wk]'>$row[wk]</option>";
        }
        echo "</select><br/>";
        echo "<input type='submit' value='Select' />";
        echo "</form>";
    } else {
        echo "Error retrieving weeks: " . mysqli_error($link);
    }
}
?>
