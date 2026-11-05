<?php
$email = $_POST['email'] ?? '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check email format after checking it is not blank.
    if (trim($email) === '') $errors[] = 'Email is required.';
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        $errors[] = 'Please enter a valid email address.';
    if ($errors) foreach ($errors as $e) echo htmlspecialchars($e) . '<br>';
    else echo 'Valid email address.';
}
?>
<form method="post">
Email: <input name="email" value="<?= htmlspecialchars($email) ?>">
<button>Check</button>
</form>
