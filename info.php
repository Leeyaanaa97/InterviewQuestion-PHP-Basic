<?php
// Handle AJAX POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the posted username
    $username = isset($_POST['username']) ? $_POST['username'] : '';

    // Simple check
    if ($username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }
}
?>
