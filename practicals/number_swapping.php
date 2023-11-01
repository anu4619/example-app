<?php
// Define two numbers
$a = 5;
$b = 10;

// Display the numbers before swapping
echo "Before swapping: a = " . $a . ", b = " . $b . "\n";

// Swap the values using a temporary variable
$temp = $a;
$a = $b;
$b = $temp;

// Display the numbers after swapping
echo "After swapping: a = " . $a . ", b = " . $b;
?>

