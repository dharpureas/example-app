<?php

/**
 * Class Practical
 *
 * Contains static functions for practical purposes.
 */
class Practical
{
    /**
     * Prints "Hello, World!" to the console.
     */
    public static function printHello()
    {
        echo "Hello, World!\n";
    }

    /**
     * Adds two numbers and returns the sum.
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public static function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Generates a Fibonacci sequence of 'n' integers.
     *
     * @param int $n
     * @return array
     */
    public static function generateFibonacciSequence($n)
    {
        $fibonacciSequence = [];

        if ($n > 0) {
            $fibonacciSequence[] = 0;
        }

        if ($n > 1) {
            $fibonacciSequence[] = 1;
        }

        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }

        return $fibonacciSequence;
    }
}

?>


