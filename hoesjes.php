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
include "menu.php";
// Connect to MySQL database
$host = "localhost";
$username = "root";
$password = "";
$database = "cases";

$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get all phones from the database
$hoesjes_query = "SELECT *, image_url FROM hoesjes";
$hoesjes_result = mysqli_query($connection, $hoesjes_query);


?>

<!-- Create a table to display the phones -->
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
    // Loop through the phones and display them in the table
    while ($hoesjes = mysqli_fetch_assoc($hoesjes_result)) {
        ?>
	<tr>
    	<td><?php echo $hoesjes['name']; ?></td>
    	<td><img id="fototable" src="<?php echo $hoesjes['image_url']; ?>"></td>
	    <td><?php echo "€".$hoesjes['price']; ?></td>
        <td><a>Edit</a></td>
        <td><a>Delete</a></td>


	</tr>

<?php
    }
    ?>
</tbody>

</table>

<?php
// Close the database connection
mysqli_close($connection);
?>

</body>
</html>
