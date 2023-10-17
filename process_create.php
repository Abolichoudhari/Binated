<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Code to process and store the new blog post in a database
    // Redirect back to the index.php page
    header("Location: index.php");
    exit();
}
?>
