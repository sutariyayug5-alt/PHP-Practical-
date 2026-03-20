<?php
echo "------------------------------------------<br>";
echo "Practical 19: Write a PHP script to demonstrate Cookie Management in PHP including creating cookies, accessing cookie values, checking cookie existence, modifying cookies, and deleting cookies.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

// Create cookie
setcookie("user", "Yug", time()+3600);

// Access cookie
if(isset($_COOKIE["user"])) {
    echo "User: " . $_COOKIE["user"] . "<br>";
}

// Modify cookie
setcookie("user", "Admin", time()+3600);
echo "Cookie modified<br>";

// Delete cookie
setcookie("user", "", time()-3600);
echo "Cookie deleted";
?>