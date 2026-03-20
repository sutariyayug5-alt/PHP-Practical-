<?php
echo "------------------------------------------<br>";
echo "Practical 20: Write a PHP script to demonstrate Exception and Error Handling in PHP using try, catch, throw and finally blocks.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

function divide($a, $b) {
    if($b == 0) {
        throw new Exception("Division by zero error");
    }
    return $a / $b;
}

try {
    echo divide(10, 0);
} catch(Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
} finally {
    echo "Execution completed";
}
?>