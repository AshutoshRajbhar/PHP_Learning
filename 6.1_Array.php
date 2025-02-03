<!-- Array in PHP  -->

<!-- 

Array

In PHP, Array is a data structure, which store multiple values in a single variable.
These values can be of any data type and stored as key-value pairs. 

-->


<!-- 

Type of Array

==> Indexed Array
==> Associative Array
==> Multidimensional Array

-->

<?php 
/**
 * 
 * 	Indexed Array
 * 
 **/
$_fruits = 	["Apple", "Banana", "Orange", "Cherry"];
echo $_fruits[1];

echo "<br/> <br/> <br/> <br/>";

echo $_fruits[0];

echo "<br/> <br/> <br/> <br/>";

// echo $_fruits[[2, 1]];
?>

<?php
echo "<br/> <br/> <br/> <br/>";
?>


<?php 
/**
 * 
 * Associative Array
 * 
 **/
$_automobile = ["Brand" => "BMW", "Maruti", "Toyata", "Hyundai",
				"Type" => "4 Wheeler",
				"Year" => "2025"];

echo $_automobile['Brand']
?>