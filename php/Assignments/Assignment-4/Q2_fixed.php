<?php
include 'db.php';
if (isset($_POST['login'])) {
    // SAFE: placeholders treat input as data, never SQL code
    $stmt = mysqli_prepare($conn, 'SELECT * FROM users WHERE email=? AND password=?');
    mysqli_stmt_bind_param($stmt, 'ss', $_POST['email'], $_POST['password']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    echo mysqli_num_rows($result) ? 'Logged in!' : 'Invalid credentials. (bypass blocked)';
}
?>
<form method="post">
    Email: <input name="email"><br>
    Password: <input name="password"><br>
    <button name="login">Login</button>
</form>
