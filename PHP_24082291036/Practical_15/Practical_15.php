<?php
echo "------------------------------------------<br>";
echo "Practical 15: Write a PHP script to demonstrate polymorphism using method overriding in PHP.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

class Shape {
    function draw() {
        echo "Drawing shape<br>";
    }
}

class Circle extends Shape {
    function draw() {
        echo "Drawing circle";
    }
}

$obj = new Circle();
$obj->draw();
?>
