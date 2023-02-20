<?php 
// functie: Programma overzicht bieren
// auteur: Tarik

// Initialisatie
include 'functions.php';

// Main

// Connect database bieren
$conn = ConnectDb();
var_dump($conn);

// Print bieren
$result = OvzBieren($conn);

?>