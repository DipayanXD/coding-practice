<?php
$scores = [88, 45, 95, 72, 60, 91];
$ascending = $scores;
sort($ascending);

echo "sort() (ascending): ";
print_r($ascending);

echo "<br><br>";
$descending = $scores;
rsort($descending);

echo "rsort() (descending): ";
print_r($descending);

echo "<br><br>";
$products = [
    "USB Cable" => 149,
    "Mouse" => 549,
    "Keyboard" => 899,
    "Bag" => 799,
    "Webcam" => 1299
];
$byPrice = $products;
asort($byPrice);

echo "asort() (by price, keys kept): ";
print_r($byPrice);

echo "<br><br>";
$byName = $products;
ksort($byName);

echo "ksort() (by product name): ";
print_r($byName);

?>