<?php
$rows = 5; // Define the number of rows for the inverted right triangle

for ($i = $rows; $i >= 1; $i--) {
    // Loop for each row, starting from the top and going downwards
    for ($j = 1; $j <= $i; $j++) {
        // Loop to print asterisks (*) for each row
        echo "*";
    }
    echo "\n"; // Add a newline after each row
}
?>


