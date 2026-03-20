<?php
echo "------------------------------------------<br>";
echo "Practical 23: Write a PHP program to connect with a MySQL database, retrieve records from a table using a SELECT query, and display the retrieved data in an HTML table format.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$conn = mysqli_connect("localhost", "root", "", "php_practical");

$result = mysqli_query($conn, "SELECT * FROM users");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Username</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['username']."</td>
    <td>".$row['password']."</td>
    </tr>";
}

echo "</table>";
?>