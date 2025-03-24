
<?php // includes the file with the person class
	include("class_lib.php"); 
?>
<?php 
	//creates new instances of  person class 
	$stefan = new person();
	$jimmy = new person;
	//sets the names
	$stefan->set_name("Stefan Mischook");
	$jimmy->set_name("Nick Waddles");
	//gets the name
	echo "Stefan's full name: " . $stefan->get_name() . "<br>";
	echo "Nick's full name: " . $jimmy->get_name(); 
?>