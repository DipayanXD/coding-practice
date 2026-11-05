<form method="post" enctype="multipart/form-data">
    Photo: <input type="file" name="photo" accept=".jpg,.jpeg,.png">
    <button>Upload</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $f = $_FILES['photo'] ?? null;
    $errors = [];
    // Check file selection, extension and 2 MB limit
    if (!$f || $f['error'] == UPLOAD_ERR_NO_FILE) $errors[] = 'Please select a file.';
    elseif ($f['error'] != UPLOAD_ERR_OK) $errors[] = 'Upload failed.';
    else {
        $ext = strtolower(pathinfo($f['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, ['jpg', 'jpeg', 'png'])) $errors[] = 'Only .jpg, .jpeg and .png files are allowed.';
        if ($f['size'] > 2 * 1024 * 1024) $errors[] = 'File size must not exceed 2 MB.';
        // Also verify actual image data, not merely the filename
        if (!@getimagesize($f['tmp_name'])) $errors[] = 'Please upload a valid image.';
    }
    if ($errors) {
        echo 'Please fix the following errors:<br>';
        foreach ($errors as $e) echo htmlspecialchars($e) . '<br>';
    } else {
        if (!is_dir('uploads')) mkdir('uploads');
        $path = 'uploads/' . bin2hex(random_bytes(8)) . '.' . $ext; // Unique name
        if (move_uploaded_file($f['tmp_name'], $path)) {
            echo 'File uploaded successfully!<br>Saved as: ' . htmlspecialchars($path);
            echo '<br><img src="' . htmlspecialchars($path) . '" width="180">';
        } else echo 'Could not save uploaded file.';
    }
}
?>
