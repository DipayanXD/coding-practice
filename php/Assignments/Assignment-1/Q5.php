<?php

$num = 90;
$bonus = $bonusMarks ?? 0;

$negativeMarks = null;
$negative = $negativeMarks ?? 0;
$negativeMarks ??= 0;

echo "Num : $num<br>";
echo "Bonus Marks : $bonus (default applied, variable was not set)<br>";
echo "Negative Marks: $negativeMarks (default applied, variable was null)";

?>