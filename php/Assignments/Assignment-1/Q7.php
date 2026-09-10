<?php

$num = 7;

echo "<h3>Multiplication Table of $num</h3>";

// Loop from 1 to 10 for the multiplication table.
for ($i = 1; $i <= 10; $i++) {

    // Multiply the number by the current counter.
    $result = $num * $i;

    echo "$num x $i = $result<br>";
}

echo "<h3>Tables from 2 to 5</h3>";

// Outer loop controls the numbers whose tables are printed.
for ($n = 2; $n <= 5; $n++) {

    // Inner loop controls the multiplier from 1 to 10.
    for ($i = 1; $i <= 10; $i++) {

        echo "$n x $i = " . ($n * $i) . "&nbsp;&nbsp;&nbsp;";
    }

    echo "<br>";
}

?>