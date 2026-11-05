<?php
session_start(); // Keep user logged in across pages
if (isset($_POST['login'])) {
    $_SESSION['name'] = trim($_POST['name']);
    session_regenerate_id(true);
    // Remember email for seven days only if checked
    if (!empty($_POST['remember'])) {
        setcookie('email', $_POST['email'], time() + 7*24*60*60, '/');
    }
    header('Location: Q1.php'); exit;
}
$email = $_COOKIE['email'] ?? '';
?>
<?php if (isset($_SESSION['name'])): ?>
    Welcome back, <?= htmlspecialchars($_SESSION['name']) ?>! (session active)<br>
    <a href="logout.php">Logout</a>
<?php else: ?>
    <form method="post">
        Name: <input name="name" required><br>
        Email: <input name="email" type="email" value="<?= htmlspecialchars($email) ?>" required><br>
        <label><input type="checkbox" name="remember"> Remember Me</label><br>
        <button name="login">Login</button>
    </form>
<?php endif; ?>
