<?php
echo '<h3>Activity Log:</h3>';
if (!file_exists('activity_log.txt')) die('No activity found.');
// Read log in saved order: oldest first, newest last.
$file = fopen('activity_log.txt', 'r');
while (!feof($file)) {
    $line = fgets($file);
    if ($line !== false) echo htmlspecialchars($line) . '<br>';
}
fclose($file);
?>
