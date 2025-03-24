<?php
// Connect to server and select database
$link = mysqli_connect("localhost", "root", "", "db1_gwalke01");

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to handle the form submission and recursion
function handleFormSubmission() {
    global $link;

    // Check if the form is submitted and gets the files data and inserts into monster table
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $image = $_FILES['monsterimage']['tmp_name']; 
        $audio = $_FILES['monsteraudio']['tmp_name'];

        $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
        $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

        $sql = "INSERT INTO monster (name, image, audio) VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

        $result = mysqli_query($link, $sql);

        // Redirect back to the form 
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

// Call the function for the form submission
handleFormSubmission();
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h2>Monster Details</h2>
<!-- form for monster input -->
<form enctype="multipart/form-data" action="" method="post">
    Monster name :
    <!-- name input -->
    <input type="text" name="txtname" size="15" class="form-control" />
    </br></br>
    Monster image :
    <!-- image input for monster -->
    <input type="file" name="monsterimage" accept="image/jpeg" class="form-control" />
    </br></br>
    Monster Sound :
    <!-- monster sound input -->
    <input type="file" name="monsteraudio" accept="audio/basic" class="form-control" />
    </br></br>
    <!-- submit button -->
    <input type="submit" class="btn btn-default" value="Save" />
</form>
</body>
</html>
