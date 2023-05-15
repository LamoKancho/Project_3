<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoegen</title>
</head>
<body>
    
<link rel="stylesheet" href="invoegen.css">
</body>
</html>
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phones";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form has been submitted
if (isset($_POST['submit'])) {
    // Get form data
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Insert data into table
    $sql = "INSERT INTO phone_models (brand, model, price, image_url) VALUES ('$brand', '$model', '$price', '$image_url')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('Location: telefoons.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>

<form method="POST">
    <label>Brand:</label>
    <input type="text" placeholder="Merk bijv: Samsung, Iphone of Oneplus" name="brand"><br>

    <label>Model:</label>
    <input type="text" placeholder="Model bijv: Galaxy S22, 14 pro max of 11 " name="model"><br>

    <label>Price:</label>
    <input type="number" placeholder="Prijs" name="price"><br>

    <label>Image URL:</label>
    <input type="text" placeholder="Plaats hier de URL naar de foto" name="image_url"><br>

    <input type="submit" name="submit" value="Invoegen">
</form>
