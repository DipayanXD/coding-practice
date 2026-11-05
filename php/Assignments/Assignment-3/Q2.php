<?php
if (!file_exists('feedback.txt')) die('No feedback found.');
// Read feedback one line at a time.
$file = fopen('feedback.txt', 'r');
echo 'All Feedback Received:<br>';
$i = 1;
while (!feof($file)) {
    $line = fgets($file);
    if (trim($line) !== '') echo $i++ . '. ' . htmlspecialchars($line) . '<br>';
}
fclose($file);
?>
