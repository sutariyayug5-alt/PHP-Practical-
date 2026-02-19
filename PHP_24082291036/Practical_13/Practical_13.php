<?php
echo "------------------------------------------<br>";
echo "Practical 13: Write a PHP script to demonstrate inheritance and method overriding in PHP.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

class ParentClass {
    function show() {
        echo "This is Parent class<br>";
    }
}

class ChildClass extends ParentClass {
    function show() {
        echo "This is Child class (Overridden method)";
    }
}

$obj = new ChildClass();
$obj->show();
?>
