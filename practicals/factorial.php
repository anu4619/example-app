<?php
// Function to calculate the factorial of a number
function calculateFactorial($n) {
    // Check if the input is a non-negative integer
    if ($n < 0 || !is_int($n)) {
        return "Invalid input. Please provide a non-negative integer.";
    }

    // Base case: factorial of 0 is 1
    if ($n == 0) {
        return 1;
    }

    // Initialize the result variable
    $result = 1;

    // Calculate the factorial using a loop
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    // Return the result
    return $result;
}

// Test the function with an example
$number = 5;
$factorial = calculateFactorial($number);

echo "Factorial of $number is $factorial";
?>

