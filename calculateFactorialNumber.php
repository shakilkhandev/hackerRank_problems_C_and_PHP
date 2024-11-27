<?php
// Recursive function to calculate factorial
function factorial($n) {
    // Base case: if n is 0 or 1, factorial is 1
    if ($n <= 1) {
        return 1;
    }

    // Recursive case
    return $n * factorial($n - 1);
}

// Testing the function
$number = 5;
echo "The factorial of $number is " . factorial($number);
?>


