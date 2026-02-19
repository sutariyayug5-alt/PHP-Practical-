<?php
echo "------------------------------------------<br>";
echo "Practical 6: Write a PHP script to demonstrate the use of while, do-while and foreach loops. <br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

$i = 1;
while ($i <= 3) {
    echo "While: $i <br>";
    $i++;
}

$j = 1;
do {
    echo "Do-While: $j <br>";
    $j++;
} while ($j <= 3);

$arr = array(10, 20, 30);
foreach ($arr as $v) {
    echo "Foreach: $v <br>";
}
?>
