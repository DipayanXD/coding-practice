<?php
function increaseSalaryByValue($salary)
{
    $salary += 2000;

    echo "Inside function : $salary<br>";
}
function increaseSalaryByReference(&$salary)
{
    $salary += 2000;

    echo "Inside function : $salary<br>";
}

$salary1 = 30000;

echo "Before (by value) : $salary1<br>";

increaseSalaryByValue($salary1);

echo "After (by value) : $salary1 (unchanged)<br><br>";

$salary2 = 30000;

echo "Before (by reference) : $salary2<br>";

increaseSalaryByReference($salary2);

echo "After (by reference) : $salary2 (changed)";

?>