<?php

/**
 * Calculates the factorial of a given number.
 *
 * @param int $number The number for which to calculate the factorial.
 *
 * @return int The factorial of the given number.
 */
function calculateFactorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0 || $number == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $number; ++$i) {
            $result *= $i;
        }
        return $result;
    }
}

// Example usage
$numberToCalculate = 5;
$factorialResult = calculateFactorial($numberToCalculate);

echo "The factorial of $numberToCalculate is: $factorialResult\n";

?>

