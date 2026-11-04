<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 1: Writing to a Text File

$message = "";

if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
    $name = trim($_POST["name"] ?? "");
    $comment = trim($_POST["comment"] ?? "");

    if ($name !== "" && $comment !== "") {
        // 1. Open "feedback.txt" in append mode ("a") so new lines don't overwrite previous ones
        $file = fopen("feedback.txt", "a");

        if ($file) {
            // 2. Build the output line manually
            $line = $name . ": " . $comment . PHP_EOL;

            // 3. Write the line to the file
            fwrite($file, $line);

            // 4. Always close the file handle once done
            fclose($file);

            $message = "Feedback saved successfully!";
        } else {
            $message = "Error: Could not open feedback.txt for writing.";
        }
    } else {
        $message = "Please enter both name and comment.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q1 - Student Feedback Form</title>
</head>
<body>
    <h2>Student Feedback Form (Task 1)</h2>

    <?php if ($message !== ""): ?>
        <p><strong><?php echo htmlspecialchars($message); ?></strong></p>
    <?php endif; ?>

    <form method="post" action="Q1.php">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Comment:</label><br>
        <textarea name="comment" rows="4" cols="40" required></textarea><br><br>

        <button type="submit">Submit Feedback</button>
    </form>

    <p><a href="Q2.php">Go to Task 2: View All Feedback (Q2.php)</a></p>
</body>
</html>
