<?php
// auteur: Tarik
// functie: algemene functies gbv hergebruik

 function ConnectDb(){
    echo "connect<br>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bier";
 
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
 } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
 }

 return $conn;

 }

 function OvzBieren($conn){

    $query = $conn->prepare("SELECT * FROM bier");
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);

     var_dump($result);
 }




?>
