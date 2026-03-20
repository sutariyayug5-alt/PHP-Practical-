<?php
echo "------------------------------------------<br>";
echo "Practical 25: Write a PHP program to create a simple login system connected to a MySQL database and demonstrate how SQL Injection can bypass authentication when user input is not properly validated. Apply secure coding techniques such as prepared statements to prevent SQL Injection.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$conn = mysqli_connect("localhost", "root", "", "php_practical");

// VULNERABLE LOGIN
$username = "' OR '1'='1' -- ";
$password = "anything";

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    echo "Login Successful (SQL Injection!)<br>";
} else {
    echo "Login Failed<br>";
}

// SECURE LOGIN 
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username=? AND password=?");
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($res) > 0){
    echo "Secure Login Successful";
} else {
    echo "Secure: Injection prevented";
}
?>