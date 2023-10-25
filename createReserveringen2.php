<!doctype html>
<html>
<head>
    <title>Create Reservering</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>Create reservering</h1>

<?php
require "Reservering.php";

$reser_naam=$_POST["reser_naam"];
$reser_datum_tijd=$_POST["reser_datum_tijd"];
$reser_datum_tijd_aan=$_POST["reser_datum_tijd_aan"];
$reser_type=$_POST["reser_type"];


$reservering = new Reservering($reser_naam, $reser_datum_tijd, $reser_type, $reser_datum_tijd_aan);
$reservering->Create();
echo "Het volgende object is gemaakt: <br/>";

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

    echo "<td>" . $row['reser_datum_tijd'] . "</td>" . "<br>";

    echo "<td>" .  $row['reser_type'] . "</td>" . "<br>";

    echo "</tr>";
    echo "</table>";
}


?>
</body>
</html>
