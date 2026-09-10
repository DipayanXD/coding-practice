<?php

$num1 = 12;
$num2 = 7;
$num3 = 9;

if ($num1 % 2 == 0) {
    echo "$num1 is Even<br>";
} else {
    echo "$num1 is Odd<br>";
}

if ($num2 % 2 == 0) {
    echo "$num2 is Even<br>";
} else {
    echo "$num2 is Odd<br>";
}

if ($num3 % 2 == 0) {
    echo "$num3 is Even<br>";
} else {
    echo "$num3 is Odd<br>";
}

$sum = $num1 + $num2 + $num3;

if ($sum % 2 == 0) {
    echo "Sum = $sum, which is Even";
} else {
    echo "Sum = $sum, which is Odd";
}

?>