<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 2: Reading a Text File Line by Line
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q2 - All Feedback Received</title>
</head>
<body>
    <h2>All Feedback Received:</h2>

    <?php
    $filename = "feedback.txt";

    // 1. Check if the file exists before attempting to open it
    if (!file_exists($filename)) {
        echo "<p>No feedback file exists yet. Please submit feedback using Q1.php first.</p>";
    } else {
        // 2. Open the file in read mode ("r")
        $file = fopen($filename, "r");

        if ($file) {
            $count = 1;
            $hasEntries = false;

            // 3. Read one line at a time until end-of-file (feof)
            while (!feof($file)) {
                $line = fgets($file);

                // fgets returns false on EOF or error; only print non-empty lines
                if ($line !== false && trim($line) !== "") {
                    echo $count . ". " . htmlspecialchars(trim($line)) . "<br>";
                    $count++;
                    $hasEntries = true;
                }
            }

            // 4. Always close the file handle
            fclose($file);

            if (!$hasEntries) {
                echo "<p>No feedback has been submitted yet.</p>";
            }
        } else {
            echo "<p>Error: Could not open the feedback file for reading.</p>";
        }
    }
    ?>

    <p><a href="Q1.php">&larr; Back to Feedback Form (Q1.php)</a></p>
</body>
</html>

