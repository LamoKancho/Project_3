<?php include "menu.php"; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klantenservice";

// Maak verbinding met de database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Controleer of de verbinding is geslaagd
if (!$conn) {
    die("Verbinding mislukt: " . mysqli_connect_error());
}

// Haal de gegevens uit het formulier
$naam = $_POST['naam'];
$email = $_POST['email'];
$onderwerp = $_POST['onderwerp'];
$bericht = $_POST['bericht'];

// Voeg de gegevens toe aan de database
$sql = "INSERT INTO berichten (naam, email, onderwerp, bericht) VALUES ('$naam', '$email', '$onderwerp', '$bericht')";

if (mysqli_query($conn, $sql)) {
    echo "Bericht verstuurd";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Sluit de verbinding met de database
mysqli_close($conn);
?>