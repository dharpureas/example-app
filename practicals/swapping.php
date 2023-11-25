
<?php

/**
 * Swaps the values of two numbers and prints the result.
 *
 * @param int $num1 The first number.
 * @param int $num2 The second number.
 */
function swapNumbers(&$num1, &$num2) {
    echo "Before swapping: ";
    echo "Number 1 = $num1, Number 2 = $num2\n";

    // Swapping logic
    [$num1, $num2] = [$num2, $num1];

    echo "After swapping: ";
    echo "Number 1 = $num1, Number 2 = $num2\n";
}

// Example usage
$number1 = 5;
$number2 = 10;

swapNumbers($number1, $number2);

?>


