<?php
require_once "nav.php" ;

require_once "dbConnect.php";
require "Reservering.php";

$reser_id=$_POST["reser_id"];
$reservering = new Reservering($reser_id);
$reservering->Search();

    $result = $_SESSION['result'];


// Toon de eigenschappen van het reservering als het gevonden is

    if ($result) {

        $reservering = new Reservering($result["reser_id"], $result["reser_naam"], $result["reser_datum_tijd"], $result["reser_datum_tijd_aan"], $result["reser_type"]);

        echo "<table>";

        echo "<tr>";

        echo "<td>" . "Reserverings ID: " . $reservering->reser_id . "</td>" . "<br>";

        echo "<td>" . "Naam op reservering: " . $reservering->reser_naam . "</td>" . "<br>";

        echo "<td>" . "Datum reservering: " . $reservering->reser_datum_tijd . "</td>" . "<br>";

        echo "<td>" . "Datum en tijd reservering aangemaakt: " . $reservering->reser_datum_tijd_aan . "</td>" . "<br>";

        echo "<td>" . "Reserverings soort: " . $reservering->reser_type . "</td>" . "<br>";

        echo "</tr>";
        echo "</table>";


}
?>

