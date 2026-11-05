<form method="post">
    Comment: <input name="comment">
    <button>Send</button>
</form>
<?php
if (isset($_POST['comment'])) {
    $comment = $_POST['comment'];
    // VULNERABLE DEMO: raw echo runs HTML/scripts. Local testing only.
    echo '<p>Before fix: ' . $comment . '</p>';
    // FIX: escape special characters before HTML output
    echo '<p>After fix: ' . htmlspecialchars($comment, ENT_QUOTES, 'UTF-8') . '</p>';
}
?>
