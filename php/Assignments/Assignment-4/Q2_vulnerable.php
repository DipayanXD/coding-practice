<?php
include 'db.php';
mysqli_report(MYSQLI_REPORT_OFF); // Keep demo from crashing on invalid SQL
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // INSECURE: input is inserted directly into SQL (demo only!)
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    echo 'Query run: ' . htmlspecialchars($sql) . '<br>';
    $result = mysqli_query($conn, $sql);
    echo $result && mysqli_num_rows($result) ? 'Logged in! (bypass successful)' : 'Invalid login.';
}
?>
<form method="post">
    Email: <input name="email"><br>
    Password: <input name="password"><br>
    <button name="login">Login</button>
</form>
