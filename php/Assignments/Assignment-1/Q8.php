<?php

$num1 = 10;
$num2 = 5;

$choice = 1;

// do-while executes at least once before checking the condition.
do {

    // Select operation based on the current choice.
    switch ($choice) {

        case 1:
            // Addition operation.
            $result = $num1 + $num2;
            echo "Choice 1 (Add) -> Result: $result<br>";
            break;

        case 2:
            // Subtraction operation.
            $result = $num1 - $num2;
            echo "Choice 2 (Subtract) -> Result: $result<br>";
            break;

        case 3:
            // Multiplication operation.
            $result = $num1 * $num2;
            echo "Choice 3 (Multiply) -> Result: $result<br>";
            break;

        case 4:
            // Division operation.
            $result = $num1 / $num2;
            echo "Choice 4 (Divide) -> Result: $result<br>";
            break;
    }

    // Move to the next menu choice.
    $choice++;

} while ($choice <= 4);

// Display message after the loop terminates.
echo "Program terminated";

?>