<link rel="stylesheet" href="login.css">
<?php
include "menu.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Verwerk het inlogformulier

	// Ontvang de gegevens van het formulier
	$username = $_POST["username"];
	$password = $_POST["password"];

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

	// Zoek de gebruiker op in de database
	$sql = "SELECT * FROM users WHERE username='$username'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		if (password_verify($password, $row["password"])) {
			// Inloggen is gelukt, sla de gebruikersnaam op in de sessie
			$_SESSION["username"] = $username;
			header("Location: index.php");
			exit;
		} else {
			// Onjuist wachtwoord
			$error_message = "Onjuiste gebruikersnaam of wachtwoord.";
		}
	} else {
		// Gebruiker niet gevonden
		$error_message = "Onjuiste gebruikersnaam of wachtwoord.";
	}

	// Sluit de databaseverbinding
	$conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inloggen</title>
</head>
<body>
	<h1>Inloggen</h1>
	<?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="username">Gebruikersnaam:</label>
		<input type="text" id="username" name="username" required><br>
		<label for="password">Wachtwoord:</label>
		<input type="password" id="password" name="password" required><br>
		<button type="submit">Inloggen</button>
	</form>
</body>
</html>
