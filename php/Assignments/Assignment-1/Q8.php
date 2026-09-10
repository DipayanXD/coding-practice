<?php

$num1 = 10;
$num2 = 5;

$choice = 1;
do {
    switch ($choice) {

        case 1:
            $result = $num1 + $num2;
            echo "Choice 1 (Add) -> Result: $result<br>";
            break;

        case 2:
            $result = $num1 - $num2;
            echo "Choice 2 (Subtract) -> Result: $result<br>";
            break;

        case 3:
            $result = $num1 * $num2;
            echo "Choice 3 (Multiply) -> Result: $result<br>";
            break;

        case 4:
            $result = $num1 / $num2;
            echo "Choice 4 (Divide) -> Result: $result<br>";
            break;
    }
    $choice++;

} while ($choice <= 4);
echo "Program terminated";

?>