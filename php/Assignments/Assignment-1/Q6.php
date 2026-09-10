<?php

$num = 4529;
$original = $num;

$sum = 0;
$rev = 0;

// Continue until all digits have been processed.
while ($num > 0) {

    // Get the last digit using modulus.
    $digit = $num % 10;

    // Add the digit to the sum.
    $sum = $sum + $digit;

    // Add the digit to the reversed number.
    $rev = $rev * 10 + $digit;

    // Remove the last digit using integer division.
    $num = intdiv($num, 10);
}

echo "Original Number : $original<br>";
echo "Sum of Digits : $sum<br>";
echo "Reversed Number : $rev";

?>