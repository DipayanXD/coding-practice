<?php

declare(strict_types=1);
function addStrict(int $a, int $b): int
{
    return $a + $b;
}
function findStudentAge(?int $age = null): string
{
    if ($age === null) {
        return "Age not provided";
    }

    return "Age: $age";
}

echo "addStrict(5, 3) = " . addStrict(5, 3) . "<br>";

echo "findStudentAge(21) -> " . findStudentAge(21) . "<br>";

echo "findStudentAge() -> " . findStudentAge();



?>