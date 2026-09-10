<?php

$num = 7;

echo "<h3>Multiplication Table of $num</h3>";
for ($i = 1; $i <= 10; $i++) {
    $result = $num * $i;

    echo "$num x $i = $result<br>";
}

echo "<h3>Tables from 2 to 5</h3>";
for ($n = 2; $n <= 5; $n++) {
    for ($i = 1; $i <= 10; $i++) {

        echo "$n x $i = " . ($n * $i) . "&nbsp;&nbsp;&nbsp;";
    }

    echo "<br>";
}

?>