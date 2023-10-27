<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken accounts</title>
</head>
<table>
<?php require_once "nav.php" ;
require_once 'dbConnect.php';?>

<h1>Afdrukken Routes</h1>
<p>Dit zijn alle gegevens uit de routestabel.</p>
<?php

global $conn;
$accounts = $conn->prepare("
    select * from routes ");
$accounts->execute();


echo '<table>';

echo "<tr>
    <th>Route ID</th>
    <th>Naam van route</th>
    <th>Locatie van route</th>
    <th>Lengte van route</th>
    <th>Duur van route</th>
  </tr>";

$result = $accounts->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {

    echo "<tr>";

    echo "<td>" .  $row['id'] . "</td>" ;

    echo "<td>" .  $row['route_naam'] . "</td>" ;

    echo "<td>" . $row['route_locatie'] . "</td>" ;

    echo "<td>" . $row['route_lengte'] . "</td>" ;

    echo "<td>" .  $row['route_duur'] . "</td>" ;

    echo "</tr>";
}


?>
</table>
</body>
</html>