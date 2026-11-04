<?php
if (isset($_POST['save'])) {
    $name = trim($_POST['name'] ?? '');
    $comment = trim($_POST['comment'] ?? '');
    if ($name !== '' && $comment !== '') {
        // Append feedback without erasing previous entries.
        $file = fopen('feedback.txt', 'a');
        fwrite($file, str_replace(["\r", "\n"], ' ', $name . ': ' . $comment) . PHP_EOL);
        fclose($file);
        header('Location: Q1.php?success=1');
        exit;
    }
    $error = 'Enter name and comment.';
}
?>
<form method="post">
Name: <input name="name"><br>
Comment: <input name="comment"><br>
<button name="save">Submit</button>
</form>
<?php
if (isset($_GET['success'])) echo 'Feedback saved successfully!';
if (isset($error)) echo htmlspecialchars($error);
?>
