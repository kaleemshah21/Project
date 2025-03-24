<html>
<body>
<?php
	// sets hourly rate and hours per week to a variable	
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	// calculates gross income without tax
	$gross = $hourlyrate * $hoursperweek;
	// sets taxrate to a variable
    $taxRate = 0.22;
	// calculates net income after tax
    $net = $gross * (1 - $taxRate); 
	// outputs the gross income and net income
	echo "Gross " . $gross . "<br>" ;
    echo "Net After Tax " . $net;
?>
</body>
</html>
