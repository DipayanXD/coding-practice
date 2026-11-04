<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 3: Registration Form with Server-Side Validation

$name = "";
$email = "";
$age = "";
$errors = [];
$success = "";

if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $age = trim($_POST["age"] ?? "");

    // Server-side validation checks
    // 1. Name cannot be empty
    if ($name === "") {
        $errors[] = "Name is required.";
    }

    // 2. Email cannot be empty
    if ($email === "") {
        $errors[] = "Email is required.";
    }

    // 3. Age must be a positive number
    if ($age === "" || !is_numeric($age) || (float)$age <= 0) {
        $errors[] = "Age must be a positive number.";
    }

    // Only process data if there are no validation errors
    if (empty($errors)) {
        $success = "Registration details are valid!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q3 - Registration Form Validation</title>
</head>
<body>
    <h2>Student Registration Form (Task 3)</h2>

    <?php if (!empty($errors)): ?>
        <p><strong>Please fix the following errors:</strong></p>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif ($success !== ""): ?>
        <p style="color: green;"><strong><?php echo htmlspecialchars($success); ?></strong></p>
    <?php endif; ?>

    <!-- Sticky form: values are preserved using htmlspecialchars -->
    <form method="post" action="Q3.php">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

        <label>Age:</label><br>
        <input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>"><br><br>

        <button type="submit">Submit Registration</button>
    </form>
</body>
</html>
