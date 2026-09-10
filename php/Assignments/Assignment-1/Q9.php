<?php

$patternChoice = 1;
for ($i = 1; $i <= 5; $i++) {
    switch ($patternChoice) {

        case 1:
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }

            echo "<br>";
            break;

        case 2:
            for ($j = 1; $j <= $i; $j++) {
                echo "$i ";
            }

            echo "<br>";
            break;

        default:
            echo "Invalid pattern choice";
            break;
    }
}

?>