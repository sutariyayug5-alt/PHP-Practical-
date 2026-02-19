<?php
echo "------------------------------------------<br>";
echo "Practical 4: Write a PHP script using switch-case to implement a simple menu-driven or calculator system.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$a = 10;
$b = 5;
$choice = 2;

switch ($choice) {
    case 1: echo "Sum = " . ($a + $b); break;
    case 2: echo "Difference = " . ($a - $b); break;
    case 3: echo "Product = " . ($a * $b); break;
}
?>
