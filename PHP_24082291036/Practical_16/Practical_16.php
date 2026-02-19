<?php
echo "------------------------------------------<br>";
echo "Practical 16: Write a PHP script to demonstrate encapsulation using private data members and public getter and setter methods.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

class User {
    private $name;

    public function setName($n) {
        $this->name = $n;
    }

    public function getName() {
        return $this->name;
    }
}

$obj = new User();
$obj->setName("Yug Sutariya");
echo "User Name: " . $obj->getName();
?>
