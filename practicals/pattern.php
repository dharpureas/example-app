<?php
function invertedTriangle($rows) {
    for ($i = $rows; $i >= 1; --$i) {
        for ($j = 1; $j <= $i; ++$j) {
            echo "* ";
        }
        echo "\n";
    }
}

// Example usage
$rows = 5;
invertedTriangle($rows);
?>

