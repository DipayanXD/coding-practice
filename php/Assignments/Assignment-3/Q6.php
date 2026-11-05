<?php
require 'db.php';
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? ''; 
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate before inserting.
    if (trim($name) === '') $errors[] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
    if (filter_var($age, FILTER_VALIDATE_INT) === false || $age <= 0)
        $errors[] = 'Enter a valid positive age.';
    if (!$errors) {
        // Prepared INSERT prevents SQL injection.
        $stmt = mysqli_prepare($conn, 'INSERT INTO students(name,email,age) VALUES(?,?,?)');
        mysqli_stmt_bind_param($stmt, 'ssi', $name, $email, $age);
        if (mysqli_stmt_execute($stmt)) {
            header('Location: Q6.php?success=1');
            exit;
        }
    }
}
if (isset($_GET['success'])) echo 'Student registered successfully!<br>';
foreach ($errors as $e) echo htmlspecialchars($e) . '<br>';
?>
<form method="post">
Name: <input name="name" value="<?= htmlspecialchars($name) ?>"><br>
Email: <input name="email" value="<?= htmlspecialchars($email) ?>"><br>
Age: <input name="age" value="<?= htmlspecialchars($age) ?>"><br>
<button>Register</button>
</form>
