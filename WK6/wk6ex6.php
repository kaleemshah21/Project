<?php
	//includes the file that contains the methods
	include("myfunctions.inc");
	//creates a header using the function from the external file
	html_header("My second function demo");
	//uses the calculate tax function and passes through the salary, rate and allowance, it then outputs the value
	echo "I pay £" . calculatetax(100000,40,12000) . " tax";
	//uses the html_footer method to generate the closing tags 
	html_footer();
?>

