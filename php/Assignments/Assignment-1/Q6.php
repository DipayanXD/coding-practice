<?php

$num = 4529;
$original = $num;

$sum = 0;
$rev = 0;
while ($num > 0) {
    $digit = $num % 10;
    $sum = $sum + $digit;
    $rev = $rev * 10 + $digit;
    $num = intdiv($num, 10);
}

echo "Original Number : $original<br>";
echo "Sum of Digits : $sum<br>";
echo "Reversed Number : $rev";

?>