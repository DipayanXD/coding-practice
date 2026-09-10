<?php

$num = 90;

// $bonusMarks is intentionally not declared.

// Null coalescing operator gives 0 if variable is unset or null.
$bonus = $bonusMarks ?? 0;

$negativeMarks = null;

// Null coalescing operator gives 0 because the variable is null.
$negative = $negativeMarks ?? 0;

// Null coalescing assignment operator assigns 0 because value is null.
$negativeMarks ??= 0;

echo "Num : $num<br>";
echo "Bonus Marks : $bonus (default applied, variable was not set)<br>";
echo "Negative Marks: $negativeMarks (default applied, variable was null)";

?>