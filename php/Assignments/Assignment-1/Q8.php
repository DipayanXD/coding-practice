<?php

$a = 10;
$b = 5;
$choice = 1;

do {
    switch ($choice) {
        case 1:
            echo "Choice 1 (Add) -> Result: " . ($a + $b) . "<br>";
            break;

        case 2:
            echo "Choice 2 (Subtract) -> Result: " . ($a - $b) . "<br>";
            break;

        case 3:
            echo "Choice 3 (Multiply) -> Result: " . ($a * $b) . "<br>";
            break;

        case 4:
            echo "Choice 4 (Divide) -> Result: " . ($a / $b) . "<br>";
    }

    $choice++;
} while ($choice <= 4);

echo "Program terminated";

?>