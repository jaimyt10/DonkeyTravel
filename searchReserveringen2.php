<?php
require_once "nav.php" ;
?><h1>Search reservering</h1>
<?php
require_once "dbConnect.php";
require "Reservering.php";

$reser_id=$_POST["reser_id"];
$reservering = new Reservering($reser_id);
$reservering->Search();

    $result = $_SESSION['result'];


// Toon de eigenschappen van het reservering als het gevonden is

    if ($result) {

        $reservering = new Reservering( $result["reser_naam"], $result["reser_datum_tijd"], $result["reser_type"], $result["reser_datum_tijd_aan"]);

        echo "<table>";

        echo "<tr>
    <th>Reserverings ID</th>
    <th>Naam op reservering</th>
    <th>Datum reservering</th>
    <th>Datum en tijd reservering aangemaakt</th>
    <th>Reserverings soort</th>
  </tr>";

        echo "<tr>";

        echo "<td>" .  $reser_id . "</td>" ;

        echo "<td>" . $reservering->reser_naam . "</td>" ;

        echo "<td>" . $reservering->reser_datum_tijd . "</td>";

        echo "<td>" . $reservering->reser_type . "</td>" ;

        echo "<td>" .  $reservering->reser_datum_tijd_aan . "</td>" ;

        echo "</tr>";
        echo "</table>";
}
?>

