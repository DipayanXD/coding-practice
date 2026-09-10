<?php
function triple($n)
{
    return $n * 3;
}
$tripleAnon = function ($n) {
    return $n * 3;
};
$tripleArrow = fn($n) => $n * 3;

$num = 5;
echo "Named function result : " . triple($num) . "<br>";

echo "Anonymous function result : " . $tripleAnon($num) . "<br>";

echo "Arrow function result : " . $tripleArrow($num) . "<br>";
$taxRate = 0.18;
$addTax = fn($price) => $price + ($price * $taxRate);

$price = 1000;

echo "Price with tax (arrow fn) : " . $addTax($price);

?>