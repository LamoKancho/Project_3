<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klantenservice</title>
</head>
<body>
	<link rel="stylesheet" href="Klantenservice.css">
<?php include "menu.php"; ?>
<h1>Klantenservice</h1>

<!-- verstuurt de ingevoerde antwoorden naar verstuur.php -->
	<form method="post" action="verstuur.php">
		<label>Naam:</label>
		<input type="text" name="naam"><br>
		<label>E-mail:</label>
		<input type="email" name="email"><br>
		<label>Onderwerp:</label>
		<input type="text" name="onderwerp"><br>
		<label>Bericht:</label>
		<textarea name="bericht"></textarea><br>
		<input type="submit" value="Verstuur">
	</form>
</body>
</html>