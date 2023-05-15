<?php
echo "<h1>Update telefoons</h1>";
require_once('function.php');

echo "Data uit het vorige formulier:<br>";
// Haal alle info van de betreffende productid $_GET['productid']
$id = $_GET['id'];
$row = Getprod($id);

if (isset($_POST['btn_wzg'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $id = $_POST['id'];

    $result = updateProduct($id, $brand, $model, $price);
if ($result) {
    echo "Product is bijgewerkt.";
    header('Location: telefoons.php');
} 
}

?>

<html>
    <body>
        <form method="post">
        <br>
        ID:<input type="" name="id" value="<?php echo $_GET['id'];?>"><br>
        Brand:<input type="" name="brand" value="<?php echo $row['brand'];?>"><br>
        Model:<input type="" name="model" value="<?php echo $row['model'];?>"><br>
        Price:<input type="" name="price" value="<?php echo $row['price'];?>"><br>
      
    <?php
    
    ?>

        <input type="submit" name="btn_wzg" value="Wijzigen"><br>
        </form>
    </body>
</html>