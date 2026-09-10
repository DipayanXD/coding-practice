<?php
$scores = [72, 95, 60, 45, 88, 30, 91, 55];

echo "Original Scores: ";
print_r($scores);

echo "<br><br>";
$passing = array_filter($scores, fn($s) => $s >= 60);

echo "Passing Scores: ";
print_r($passing);

echo "<br><br>";
$reIndexed = array_values($passing);

echo "Re-indexed Passing: ";
print_r($reIndexed);

echo "<br><br>";
$withGrace = array_map(fn($s) => $s + 5, $scores);

echo "With Grace Marks: ";
print_r($withGrace);

?>