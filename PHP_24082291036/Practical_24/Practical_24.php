<?php
echo "------------------------------------------<br>";
echo "Practical 24: Write a PHP program to create an HTML form where form options such as a dropdown list are generated dynamically using data retrieved from a MySQL database.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$conn = mysqli_connect("localhost", "root", "", "php_practical");

$result = mysqli_query($conn, "SELECT username FROM users");

echo "<form>";
echo "<select>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<option>".$row['username']."</option>";
}

echo "</select>";
echo "</form>";
?>