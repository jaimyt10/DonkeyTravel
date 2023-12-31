<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken reserveringen</title>
</head>
<body>
<?php require_once "nav.php" ;
require_once 'dbConnect.php';?>

<h1>Afdrukken reserveringen</h1>
<p>Dit zijn alle gegevens uit de reserveringentabel.</p>
<?php

global $conn;
$reserveringen = $conn->prepare("
    select * from reserveringen ");
$reserveringen->execute();
echo "<table>";

echo "<tr>
    <th>Reserverings ID</th>
    <th>Naam op reservering</th>
    <th>Datum reservering</th>
    <th>Datum en tijd reservering aangemaakt</th>
    <th>Reserverings soort</th>
  </tr>";
$result = $reserveringen->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {



    echo "<tr>";

    echo "<td>" .  $row['reser_id'] . "</td>" ;

    echo "<td>" .  $row['reser_naam'] . "</td>" ;

    echo "<td>" . $row['reser_datum_tijd'] . "</td>" ;

    echo "<td>" . $row['reser_datum_tijd_aan'] . "</td>" ;

    echo "<td>" .  $row['reser_type'] . "</td>" ;

    echo "</tr>";

}

?>
</table>
</body>
</html>