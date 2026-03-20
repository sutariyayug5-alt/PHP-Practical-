<?php
session_start();

echo "------------------------------------------<br>";
echo "Practical 18: Write a PHP script to demonstrate Session Management in PHP including creating sessions, accessing session variables, checking session existence, modifying session values, and destroying sessions.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

// Create session
$_SESSION["user"] = "Yug";
echo "Session created<br>";

// Access session
echo "User: " . $_SESSION["user"] . "<br>";

// Modify session
$_SESSION["user"] = "Admin";
echo "Modified User: " . $_SESSION["user"] . "<br>";

// Check session
if(isset($_SESSION["user"])) {
    echo "Session exists<br>";
}

// Destroy session
session_destroy();
echo "Session destroyed";
?>