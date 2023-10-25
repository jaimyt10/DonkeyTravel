<?php
require_once "nav.php" ;

require_once "dbConnect.php";
require_once "Reservering.php";

// Get values from the form
$reser_id = $_POST['reser_id'];
$reser_naam = $_POST['reser_naam'];
$reser_datum_tijd = $_POST['reser_datum_tijd'];
$reser_type = $_POST['reser_type'];



// Create a new Klant object with the new values
$klant = new Reservering($reser_id, $reser_naam, $reser_datum_tijd, $reser_type);

// Update the customer record in the database
$sql = $conn->prepare("UPDATE reserveringen SET reser_naam=:reser_naam, reser_datum_tijd=:reser_datum_tijd, reser_type=:reser_type
                    WHERE reser_id=:reser_id");
$sql->execute([
    "reser_id" => $reser_id,
    "reser_naam" => $reser_naam,
    "reser_datum_tijd" => $reser_datum_tijd,
    "reser_type" => $reser_type

]);

echo "Reservering succesvol geüpdatet!";

?>
