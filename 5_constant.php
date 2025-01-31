<!-- Constants -->

<?php 
/**
 * constant are used to store data
 * Value in constant can not be changed e.g.  const pi = 3.14;
 * constant are not declared by using $, it is declared by const
 **/
?>


<?php 
const pi = 3.14;
echo pi;
?>


<!-- ************************************************************* -->

    <!-- Difference between Variable and Constant -->

<!-- ************************************************************* -->


<?php 
$name = "Ashutosh";
echo "<h1>$name</h1>";
?>

<?php 
$name = "Jhon";
echo "<h1>$name</h1>";
?>

<?php 
define("pi", 3.14);
echo pi;
?>