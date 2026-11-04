<?php
// BCAC501 - PHP with MySQL | Semester V
// Lab Assignment - 3 | Task 4: Email Format Validation

$sampleTests = [
    "ankita@example.com",
    "ankita.example.com"
];

$userEmail = "";
$userResult = "";
$userError = "";

if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
    $userEmail = trim($_POST["email"] ?? "");

    // 1. Confirm the email field is not empty first
    if ($userEmail === "") {
        $userError = "Email field cannot be empty.";
    } elseif (filter_var($userEmail, FILTER_VALIDATE_EMAIL) === false) {
        // 2. filter_var returns false if invalid; use strict comparison (=== false)
        $userError = "Please enter a valid email address.";
    } else {
        $userResult = "Valid";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q4 - Email Format Validation</title>
</head>
<body>
    <h2>Email Format Validation (Task 4)</h2>

    <h3>Automated Sample Test Output:</h3>
    <div style="background-color: #f7f7f7; border: 1px solid #ccc; padding: 10px; font-family: monospace;">
        <?php foreach ($sampleTests as $testEmail): ?>
            <?php
            echo "Testing: '" . htmlspecialchars($testEmail) . "' -&gt; ";
            // Strict check against false
            if (filter_var($testEmail, FILTER_VALIDATE_EMAIL) === false) {
                echo "Please enter a valid email address.";
            } else {
                echo "Valid";
            }
            echo "<br>";
            ?>
        <?php endforeach; ?>
    </div>

    <h3>Interactive Email Validation Form:</h3>
    <form method="post" action="Q4.php">
        <label>Email Address:</label><br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($userEmail); ?>">
        <button type="submit">Validate Email</button>
    </form>

    <?php if ($userError !== ""): ?>
        <p style="color: red;"><strong><?php echo htmlspecialchars($userError); ?></strong></p>
    <?php elseif ($userResult !== ""): ?>
        <p style="color: green;"><strong>Testing: '<?php echo htmlspecialchars($userEmail); ?>' -&gt; <?php echo htmlspecialchars($userResult); ?></strong></p>
    <?php endif; ?>
</body>
</html>
