<?php
echo "------------------------------------------<br>";
echo "Practical 21: Write a PHP script to demonstrate Database Connectivity using MySQL. Establish a connection between PHP and MySQL server and display a successful connection message.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";
?>