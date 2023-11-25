<?php

/**
 * Generates a simple inverted triangle pattern with asterisks.
 *
 * @param int $rows The number of rows in the inverted triangle.
 */
function generateInvertedTriangle($rows) {
    for ($i = $rows; $i >= 1; --$i) {
        // Print asterisks
        for ($j = 1; $j <= $i; ++$j) {
            echo "*";
        }

        echo "\n";
    }
}

// Example usage
$numberOfRows = 5;
generateInvertedTriangle($numberOfRows);

?>




