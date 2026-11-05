<?php
require 'db.php';
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate fields before saving.
    if (trim($name) === '') $errors[] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
    if (filter_var($age, FILTER_VALIDATE_INT) === false || $age <= 0)
        $errors[] = 'Enter a valid positive age.';
    if (!$errors) {
        // Insert with a prepared statement first.
        $stmt = mysqli_prepare($conn, 'INSERT INTO students(name,email,age) VALUES(?,?,?)');
        mysqli_stmt_bind_param($stmt, 'ssi', $name, $email, $age);
        if (mysqli_stmt_execute($stmt)) {
            // Log only after a successful insert.
            date_default_timezone_set('Asia/Kolkata');
            $date = date('Y-m-d H:i:s');
            $logName = str_replace(["\r", "\n"], ' ', $name);
            $logEmail = str_replace(["\r", "\n"], ' ', $email);
            $file = fopen('activity_log.txt', 'a');
            fwrite($file, "[$date] Registered: $logName ($logEmail)" . PHP_EOL);
            fclose($file);
            header('Location: Q10.php?success=1');
            exit;
        }
    }
}
if (isset($_GET['success'])) echo 'Student registered and activity logged!<br>';
foreach ($errors as $e) echo htmlspecialchars($e) . '<br>';
?>
<form method="post">
Name: <input name="name" value="<?= htmlspecialchars($name) ?>"><br>
Email: <input name="email" value="<?= htmlspecialchars($email) ?>"><br>
Age: <input name="age" value="<?= htmlspecialchars($age) ?>"><br>
<button>Register</button>
</form>
<a href="log.php">View activity log</a>
