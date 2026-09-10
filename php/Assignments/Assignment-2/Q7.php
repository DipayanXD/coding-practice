<?php
function createStudentProfile(
    $name,
    $age,
    $course = "BCA",
    $year = 1
) {
    return "$name, Age $age, $course Year $year";
}
$result1 = createStudentProfile("Ankita", 20, "BCA", 3);
$result2 = createStudentProfile(
    name: "Rahul",
    age: 21,
    year: 2
);
$result3 = createStudentProfile("Priya", 19);

echo "Call 1 (all positional) : $result1<br>";
echo "Call 2 (named, skip course) : $result2<br>";
echo "Call 3 (only name & age) : $result3";

?>