<?php
echo "------------------------------------------<br>";
echo "Practical 12: Write a PHP script to demonstrate the use of constructor and destructor in PHP.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

class Demo {
    function __construct() {
        echo "Constructor is called<br>";
    }

    function __destruct() {
        echo "Destructor is called";
    }
}

$obj = new Demo();
?>
