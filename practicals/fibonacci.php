<?php
function fibonacci($n) {
    if ($n <= 0) {
        return [];
    } elseif ($n == 1) {
        return [0];
    } elseif ($n == 2) {
        return [0, 1];
    } else {
        $fib = fibonacci($n - 1);
        $next = $fib[$n - 2] + $fib[$n - 3];
        $fib[] = $next;
        return $fib;
    }
}

$number = 10; // Change this to the desired number of Fibonacci sequence elements
$result = fibonacci($number);
echo implode(', ', $result);
?>

