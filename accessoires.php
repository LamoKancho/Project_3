<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="accessoires.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessoires</title>
</head>

<body>
<?php
//menu er in
include "menu.php";
// Maak verbinding met de MySQL-database
$host = "localhost";
$username = "root";
$password = "";
$database = "accessoires";

$connection = mysqli_connect($host, $username, $password, $database);

// Controleer of de verbinding is geslaagd
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query om alle accessoires uit de database op te halen
$accessoires_query = "SELECT *, photo_url FROM products";
$accessoires_result = mysqli_query($connection, $accessoires_query);


?>

<!-- Maak een tabel om de accessoires weer te geven -->
<table>
<thead>
    <tr>
        <th>Artikel</th>
        <th>Foto</th>
        <th>Prijs</th>
        <th>Bewerken</th>
        <th>Verwijderen</th>
    </tr>
</thead>

    <tbody>
    <?php
   // Loop door de accessoires en toon ze in de tabel
    while ($accessoires = mysqli_fetch_assoc($accessoires_result)) {
        ?>
	<tr>
    	<td><?php echo $accessoires['name']; ?></td>
    	<td><img id="fototable" src="<?php echo $accessoires['photo_url']; ?>"></td>
	    <td><?php echo "€".$accessoires['price']; ?></td>
        <td><a>Edit</a></td>
        <td><a>Delete</a></td>


	</tr>

<?php
    }
    ?>
</tbody>

</table>

<?php
// Sluit de databaseverbinding
mysqli_close($connection);
?>

</body>
</html>
