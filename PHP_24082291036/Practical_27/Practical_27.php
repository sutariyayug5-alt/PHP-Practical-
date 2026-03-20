<?php
session_start();

echo "------------------------------------------<br>";
echo "Practical 27: Write a PHP program that performs a sensitive operation such as changing a user password and demonstrate how an attacker can trigger the request without the user's consent. Implement CSRF protection using a security token to prevent unauthorized requests.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

// Generate token
if(empty($_SESSION['token'])){
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

echo "<form method='POST'>
<input type='hidden' name='token' value='".$_SESSION['token']."'>
<input type='submit' name='submit' value='Change Password'>
</form>";

if(isset($_POST['submit'])){
    if($_POST['token'] == $_SESSION['token']){
        echo "Valid Request (CSRF Protected)";
    } else {
        echo "CSRF Attack Detected!";
    }
}
?>