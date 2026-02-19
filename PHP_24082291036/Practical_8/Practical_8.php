<?php
echo "------------------------------------------<br>";
echo "Practical 8: Write a PHP script to demonstrate basic string functions such as strlen(), substr(), trim(), and strpos().<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$str = "  Hello PHP World  ";

echo "Length: " . strlen($str) . "<br>";
echo "Substring: " . substr($str, 2, 5) . "<br>";
echo "Trimmed: " . trim($str) . "<br>";
echo "Position of PHP: " . strpos($str, "PHP");
?>
