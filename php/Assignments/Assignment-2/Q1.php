<?php

$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

echo "Indexed Array:<br>";

foreach ($fruits as $index => $fruit) {
    echo "$index: $fruit<br>";
}

$student = [
    "name" => "Dipayan",
    "age" => 20,
    "department" => "BCA",
    "cgpa" => 8.75
];

echo "<br>Associative Array:<br>";

foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}

?>