<html>
<head>
	<title>Response to form</title>
</head>
<body>
<?php
	//displays the name entered in the form
	echo "Your name is $_POST[txtname]";
	//displays the gender selected in the form
	echo "Your gender is $_POST[radsex]";
	//displays the occupation entered in the form
	echo "Your occupation is $_POST[seloccupation]";
	
?>
</body>
</html>
