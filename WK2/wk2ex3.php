<?php 
	//Define a constant pass grade with a value of 40, 
	//then calculate and display the required grades for passing, merit, and distinction.
	define("PASS_GRADE",40);
	echo "You need " . PASS_GRADE . " % or more to pass. <br/>";
	$grade = PASS_GRADE  + 15;
	echo "To achieve a merit you need $grade %  or more <br/>";
	$grade = PASS_GRADE  + 30;
	echo "To achieve a distinction you need $grade %  or more <br/>";
?>	

