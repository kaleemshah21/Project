<?php

//function to generate the title of the page
function html_header($pageTitle)
{
	echo "<html><title> $pageTitle </title></head>";
	echo "<body>";
}

//function to genereate the h1 tag
function html_h1($text)
{
	echo "<h1> $text </h1>";
}

//function to generate a h2 tag
function html_h2($text)
{
	echo "<h2> $text </h2>";
}

//function to generate a footer
function html_footer()
{
	echo "</body>";
	echo "</html>";
}

//function to calculate tax based on salary, rate and allowance, and returns it
function calculatetax($salary, $rate=40, $allowance)
{
	$taxable = $salary - $allowance;
	$tax = ($taxable * ($rate/100));
	return $tax;
}


?>
