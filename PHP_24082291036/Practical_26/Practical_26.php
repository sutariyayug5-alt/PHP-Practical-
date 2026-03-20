<?php
echo "------------------------------------------<br>";
echo "Practical 26: Write a PHP program that accepts user input through a form and displays it on a webpage. Demonstrate how malicious scripts can be injected through user input and executed in the browser. Implement input sanitization techniques such as htmlspecialchars() to prevent Cross-Site Scripting attacks.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$input = "<script>alert('Hacked')</script>";

echo "Without Protection:<br>";
echo $input;

echo "<br><br>With Protection:<br>";
echo htmlspecialchars($input);
?>