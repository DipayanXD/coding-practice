<?php

$patternChoice = 1;

// Loop controls the number of rows from 1 to 5.
for ($i = 1; $i <= 5; $i++) {

    // Switch selects the pattern for every row.
    switch ($patternChoice) {

        case 1:

            // Inner loop prints i stars for the current row.
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }

            echo "<br>";
            break;

        case 2:

            // Inner loop prints the current row number i times.
            for ($j = 1; $j <= $i; $j++) {
                echo "$i ";
            }

            echo "<br>";
            break;

        default:

            // Display an error for an invalid pattern choice.
            echo "Invalid pattern choice";
            break;
    }
}

?>