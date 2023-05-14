<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Telefoons</title>
	<link rel="stylesheet" href="telefoons.css">
</head>
<body>

<?php
include "menu.php";
// Connect to MySQL database
$host = "localhost";
$username = "root";
$password = "";
$database = "phones";

$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get all brands from the database
$brands_query = "SELECT DISTINCT brand FROM phone_models";
$brands_result = mysqli_query($connection, $brands_query);

// Query to get all phones from the database
$phones_query = "SELECT *, image_url FROM phone_models";
if (isset($_GET['brand']) && !empty($_GET['brand'])) {
    $selected_brand = $_GET['brand'];
    $phones_query .= " WHERE brand = '$selected_brand'";
}
$phones_result = mysqli_query($connection, $phones_query);


?>

<!-- Display the brand filter dropdown -->
<div class="filter-container">
    <form method="get">
        <label for="brand">Filter by brand:</label>
        <select id="brand" name="brand">
            <option value="">All</option>
            <?php while ($brand = mysqli_fetch_assoc($brands_result)) { ?>
                <option value="<?php echo $brand['brand']; ?>"
                    <?php if (isset($selected_brand) && $selected_brand == $brand['brand']) echo 'selected'; ?>>
                    <?php echo $brand['brand']; ?>
                </option>
            <?php } ?>
        </select>
        <button type="submit">Filter</button>
    </form>
</div>


<!-- Create a table to display the phones -->
<table>
<thead>
    <tr>
        <th>Merk</th>
        <th>Model</th>
        <th>Foto</th>
        <th>Prijs</th>
        <th>Bewerken</th>
        <th>Verwijderen</th>
    </tr>
</thead>

    <tbody>
    <?php
    // Loop through the phones and display them in the table
    while ($phone = mysqli_fetch_assoc($phones_result)) {
        ?>
	<tr>
    	<td><?php echo $phone['brand']; ?></td>
	    <td><?php echo $phone['model']; ?></td>
    	<td><img id="fototable" src="<?php echo $phone['image_url']; ?>"></td>
	    <td><?php echo "€".$phone['price']; ?></td>
    	<td><a href="edit_phone.php?id=<?php echo $phone['id']; ?>">Bewerken</a></td>
    	<td><a href="delete_phone.php?id=<?php echo $phone['id']; ?>">Verwijderen</a></td>
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
