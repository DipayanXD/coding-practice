<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate on the server; keep entered values on error.
    if (trim($name) === '') $errors[] = 'Name is required.';
    if (trim($email) === '') $errors[] = 'Email is required.';
    if (!is_numeric($age) || $age <= 0) $errors[] = 'Age must be a positive number.';
    if ($errors) {
        echo 'Please fix the following errors:<br>';
        foreach ($errors as $e) echo htmlspecialchars($e) . '<br>';
    } else echo 'Registration successful!<br>';
}
?>
<form method="post">
Name: <input name="name" value="<?= htmlspecialchars($name) ?>"><br>
Email: <input name="email" value="<?= htmlspecialchars($email) ?>"><br>
Age: <input name="age" value="<?= htmlspecialchars($age) ?>"><br>
<button>Register</button>
</form>
