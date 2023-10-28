<?php
function generateFibonacci($n) {
    $fib = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

$n = 10; // Change this to the number of Fibonacci numbers you want to generate
$fibonacciSequence = generateFibonacci($n);

foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}
?>

