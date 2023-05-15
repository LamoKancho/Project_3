<?php
 function ConnectDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phones";
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // echo "Connected successfully";
        return $conn;
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

 }

 
 
 function Getprodac($id){
    $conn = ConnectDb();

    $query = $conn->prepare("SELECT * FROM products WHERE id = $id");
    $query->execute();
    $result = $query->fetch();

    return $result;
 }


 function Getprod($id){
    $conn = ConnectDb();

    $query = $conn->prepare("SELECT * FROM phone_models WHERE id = $id");
    $query->execute();
    $result = $query->fetch();

    return $result;
 }



 function PrintTableTest($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";
    // print elke rij
    foreach ($result as $row) {
        echo "<br> rij:";
        
        foreach ($row as  $value) {
            echo "kolom" . "$value";
        }          
        
    }
}

// Function 'PrintTable' print een HTML-table met data uit $result.
function PrintTable($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";

    // Print header table

    // haal de kolommen uit de eerste [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }

    // print elke rij
    foreach ($result as $row) {
        
        $table .= "<tr>";
        // print elke kolom
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}


function producten(){

    // Haal alle bier record uit de tabel 
    // $result = GetData("phone_models");
    
    //print table
    //Printproducten($result);
 }
 
function Printproducten($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";

    // Print header table

    // haal de kolommen uit de eerste [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }
    $table .= "</tr>";
    // print elke rij
    foreach ($result as $row) {
        
        $table .= "<tr>";
        // print elke kolom
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        // $table .= "</tr>";
        
        // Wijzig knopje
        $table .= "<td>". 
        "<form method='post' action='update_telefoons.php?id=$row[id]' >       
                <button name='wzg'>Wzg</button>	 
        </form>" . "</td>";

    // Delete via linkje href
    // $table .= '<td><a href="delete_bier.php?productid='.$row["productid"].'">verwijder</a></td>';
    $table .= "<td>". 
    "<form method='post' action='delete.php?id=$row[id]' >       
            <button name='wzg'>Delete</button>	 
    </form>" . "</td>";


    $table .= "<td>". 
    "<form method='post' action='invoegen.php?id=$row[id]' >       
            <button name='wzg'>toevoegen</button>	 
    </form>" . "</td>";

        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}

function updateProductac($id, $name, $price) {
    // Create a connection to the database
    $conn = mysqli_connect("localhost", "root", "", "accessoires");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query
    $sql = "UPDATE products SET name='$name', price='$price' WHERE id=$id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    }

}

// function DeleteProd($id) {
//     $conn = connectdb();

//     echo "KAAS";
   

//     $sql = $conn->prepare("DELETE FROM phone_models WHERE `id` = $id");
//     return $sql->execute([$id]);
//     header('Location: telefoons2.php');
//   }

  function InsertProduct($phone_models, $brand, $model, $price){

    $conn = mysqli_connect("localhost", "root", "", "phones");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "INSERT phone_models SET brand='$brand', model='$model', price=$price";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    }
  }
?>