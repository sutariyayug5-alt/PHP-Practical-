<?php
echo "------------------------------------------<br>";
echo "Practical 11: Write a PHP script to demonstrate the concept of class and object in PHP.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

class Student {
    public $name = "Yug Sutariya";

    function display() {
        echo "Student Name: " . $this->name;
    }
}

$obj = new Student();
$obj->display();
?>
