<?php

$a = 45;
$b = 30;
$c = 60;

echo "Comparing $a <=> $b => " . ($a <=> $b) . "<br>";
echo "Comparing $a <=> $c => " . ($a <=> $c) . "<br>";

$max = $a;

switch ($max <=> $b) {
    case -1: $max = $b; break;
}

switch ($max <=> $c) {
    case -1: $max = $c; break;
}

echo "Largest number is: $max";

?>