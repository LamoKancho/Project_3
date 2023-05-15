<?php
// Replace {your database credentials} with your actual database credentials
$pdo = new PDO("mysql:host=localhost;dbname=phones", "root", "");

// Get the ID from the URL
$id = $_GET["id"];

// Prepare and execute the DELETE statement
$statement = $pdo->prepare("DELETE FROM phone_models WHERE id = ?");
$statement->execute([$id]);

// Redirect back to the original page
header("Location: telefoons.php");
exit();
?>
