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

        $reservering = new Reservering( $result["reser_naam"], $result["reser_datum_tijd"], $result["reser_datum_tijd_aan"], $result["reser_type"]);

        echo "<table>";

        echo "<tr>
    <th>Reserverings ID</th>
    <th>Naam op reservering</th>
    <th>Datum reservering</th>
    <th>Datum en tijd reservering aangemaakt</th>
    <th>Reserverings soort</th>
  </tr>";

        echo "<tr>";

        echo "<td>" .  $reser_id . "</td>" . "<br>";

        echo "<td>" . $reservering->reser_naam . "</td>" . "<br>";

        echo "<td>" . $reservering->reser_datum_tijd . "</td>" . "<br>";

        echo "<td>" . $reservering->reser_type . "</td>" . "<br>";

        echo "<td>" .  $reservering->reser_datum_tijd_aan      . "</td>" . "<br>";

        echo "</tr>";
        echo "</table>";
}
?>

