<?php
require_once "nav.php" ;
?><h1>Update reservering</h1>
<?php
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
$reserveringen = $conn->prepare("
    select * from reserveringen where  reser_naam = '$reser_naam'");
$reserveringen->execute();

$result = $reserveringen->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {

    echo "<table>";

    echo "<tr>
    <th>Reserverings ID</th>
    <th>Naam op reservering</th>
    <th>Datum reservering</th>
    <th>Datum en tijd reservering aangemaakt</th>
    <th>Reserverings soort</th>
  </tr>";

    echo "<tr>";

    echo "<td>" .  $row['reser_id'] . "</td>" . "<br>";

    echo "<td>" .  $row['reser_naam'] . "</td>" . "<br>";

    echo "<td>" . $row['reser_datum_tijd'] . "</td>" . "<br>";

    echo "<td>" . $row['reser_datum_tijd_aan'] . "</td>" . "<br>";

    echo "<td>" .  $row['reser_type'] . "</td>" . "<br>";

    echo "</tr>";
    echo "</table>";
}
?>
