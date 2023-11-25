<?php

/**
 * Generates the Fibonacci sequence up to a specified number of terms.
 *
 * @param int $terms The number of terms in the Fibonacci sequence.
 *
 * @return array The Fibonacci sequence.
 */
function generateFibonacci($terms) {
    $fibonacciSequence = [];
    
    if ($terms >= 1) {
        $fibonacciSequence[] = 0;
    }

    if ($terms >= 2) {
        $fibonacciSequence[] = 1;
    }

    for ($i = 2; $i < $terms; ++$i) {
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Example usage
$numberOfTerms = 10;
$fibonacciSeries = generateFibonacci($numberOfTerms);

echo "Fibonacci Sequence up to $numberOfTerms terms: ";
echo implode(", ", $fibonacciSeries) . "\n";

?>



