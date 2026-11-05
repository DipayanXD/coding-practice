<?php
session_start();
// Generate a secret CSRF token for this session
if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Reject missing or altered tokens before processing form data
    if (!hash_equals($_SESSION['csrf'], $_POST['token'] ?? '')) {
        echo 'Invalid request -- CSRF token mismatch.';
    } else {
        echo 'Comment submitted safely!';
        $_SESSION['csrf'] = bin2hex(random_bytes(32)); // Rotate token
    }
}
?>
<form method="post">
    Comment: <input name="comment">
    <input type="hidden" name="token" value="<?= $_SESSION['csrf'] ?>">
    <button>Submit</button>
</form>
