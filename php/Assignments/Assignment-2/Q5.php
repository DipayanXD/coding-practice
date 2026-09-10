<?php
$cities = [
    "Kolkata",
    "Delhi",
    "Mumbai",
    "Chennai",
    "Bangalore",
    "Hyderabad"
];

$searchCity = "Kolkata";
$position = array_search($searchCity, $cities);
if ($position === false) {
    echo "Searching for '$searchCity': Not Found<br>";
} else {
    echo "Searching for '$searchCity': Found at index $position<br>";
}

$searchCity = "Paris";
$position = array_search($searchCity, $cities);

if ($position === false) {
    echo "Searching for '$searchCity': Not Found<br>";
} else {
    echo "Searching for '$searchCity': Found at index $position<br>";
}



?>