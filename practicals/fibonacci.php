<?php
// Function to generate a Fibonacci sequence of length n
function fibonacci($n) {
    // Handle the case when n is 0 by returning an empty array
    if ($n <= 0) {
        return [];
    } 
    // Handle the case when n is 1 by returning an array with a single element (0)
    elseif ($n == 1) {
        return [0];
    } 
    // Handle the case when n is 2 by returning an array with two elements (0, 1)
    elseif ($n == 2) {
        return [0, 1];
    }

    // Initialize the first two Fibonacci numbers
    $sequence = [0, 1];

    // Calculate and store the Fibonacci numbers from the third element to the n-th element
    for ($i = 2; $i < $n; $i++) {
        $nextNumber = $sequence[$i - 1] + $sequence[$i - 2];
        $sequence[] = $nextNumber;
    }

    // Return the generated Fibonacci sequence
    return $sequence;
}

// Define the desired length of the Fibonacci sequence
$length = 10;

// Generate the Fibonacci sequence
$fibonacciSequence = fibonacci($length);

// Print the Fibonacci sequence with a clear message
echo "Fibonacci sequence of length $length: " . implode(", ", $fibonacciSequence);
?>

