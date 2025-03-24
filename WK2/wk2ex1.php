<?php
	//sets rate and hours as variables
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	//calculates the gross income
	$gross = $hourlyrate * $hoursperweek;
?>	
<html>
<head></head>
<body>
	<!-- outputs the gross wage to the webpage -->
	<p> My gross wage is <?php print($gross); ?>
</body>
</html>
