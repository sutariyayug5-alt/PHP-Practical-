<?php
echo "------------------------------------------<br>";
echo "Practical 2: Write a PHP script to demonstrate the use of constants and arithmetic / logical operators in PHP.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

define("PI", 3.14);
$a = 10;
$b = 5;

echo "Addition: " . ($a + $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Logical AND: ";
var_dump($a > 5 && $b < 10);
?>
