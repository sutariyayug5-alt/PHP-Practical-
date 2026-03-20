<?php
echo "------------------------------------------<br>";
echo "Practical 22: Develop a CRUD (Create, Read, Update, Delete) application using PHP and MySQL to demonstrate database connectivity, form handling, and dynamic data management.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$conn = mysqli_connect("localhost", "root", "", "php_practical");

mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('user1', '1234')");
echo "Record Inserted<br>";

$result = mysqli_query($conn, "SELECT * FROM users");
echo "<br>Records:<br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: ".$row['id']." | Name: ".$row['username']."<br>";
}

mysqli_query($conn, "UPDATE users SET username='updatedUser' WHERE id=1");
echo "<br>Record Updated<br>";

mysqli_query($conn, "DELETE FROM users WHERE id=1");
echo "Record Deleted<br>";
?>