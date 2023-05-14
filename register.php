<link rel="stylesheet" href="register.css">
<?php
include "menu.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Verwerk het registratieformulier

	// Ontvang de gegevens van het formulier
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

	// Maak verbinding met de database
	$servername = "localhost";
	$username_db = "root";
	$password_db = "";
	$dbname = "Gebruikers";
	$conn = new mysqli($servername, $username_db, $password_db, $dbname);

	// Controleer of de verbinding is gelukt
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Voeg de gegevens toe aan de database
	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	if ($conn->query($sql) === TRUE) {
		echo "Registratie succesvol!";
	} else {
		echo "Fout bij het registreren: " . $conn->error;
	}

	// Sluit de databaseverbinding
	$conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registreren</title>
</head>
<body>
	<h1>Registreren</h1>
	<!-- hiermee kun je registreren en komt je username email en wachtwoord in de database en kun je vervolgens inloggen via de inlog pagina met de zelfde username en password -->
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="username">Gebruikersnaam:</label>
		<input type="text" id="username" name="username" required><br>
		<label for="email">E-mailadres:</label>
		<input type="email" id="email" name="email" required><br>
		<label for="password">Wachtwoord:</label>
		<input type="password" id="password" name="password" required><br>
		<button type="submit">Registreren</button>
	</form>
</body>
</html>
