<?php

$a = 45;
$b = 30;
$c = 60;
$result1 = $a <=> $b;
$result2 = $a <=> $c;

echo "Comparing $a <=> $b => $result1<br>";
echo "Comparing $a <=> $c => $result2<br>";
$largest = $a;
switch ($result1) {
    case 1:
        $largest = $a;
        break;

    case 0:
        $largest = $a;
        break;

    case -1:
        $largest = $b;
        break;
}
$result3 = $largest <=> $c;

switch ($result3) {
    case -1:
        $largest = $c;
        break;

    case 0:
        $largest = $largest;
        break;

    case 1:
        $largest = $largest;
        break;
}

echo "Largest number is: $largest";

?>