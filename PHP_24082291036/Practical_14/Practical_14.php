<?php
echo "------------------------------------------<br>";
echo "Practical 14: Write a PHP script to demonstrate multiple inheritance using traits.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

trait TraitOne {
    function msgOne() {
        echo "Trait One used<br>";
    }
}

trait TraitTwo {
    function msgTwo() {
        echo "Trait Two used<br>";
    }
}

class Sample {
    use TraitOne, TraitTwo;
}

$obj = new Sample();
$obj->msgOne();
$obj->msgTwo();
?>
