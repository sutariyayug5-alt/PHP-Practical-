<?php
echo "------------------------------------------<br>";
echo "Practical 10: Write a PHP script to create associative arrays and apply sorting functions such as asort() and ksort().<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$marks = array("Maths" => 85, "Science" => 90, "English" => 78);

echo "Original Array:<br>";
print_r($marks);

asort($marks);
echo "<br><br>After asort():<br>";
print_r($marks);

ksort($marks);
echo "<br><br>After ksort():<br>";
print_r($marks);
?>
