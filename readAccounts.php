<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken accounts</title>
</head>
<body>
<?php require_once "nav.php" ;
require_once 'dbConnect.php';?>

<h1>afdrukken account</h1>
<p>Dit zijn alle gegevens uit de accountstabel.</p>
<?php

global $conn;
$accounts = $conn->prepare("
    select * from accounts ");
$accounts->execute();

$result = $accounts->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {

    echo "<table>";

    echo "<tr>
    <th>accounts ID</th>
    <th>Naam op account</th>
    <th>password account</th>
    <th>geboortedatum account </th>
    <th>account mail</th>
  </tr>";

    echo "<tr>";

    echo "<td>" .  $row['id'] . "</td>" . "<br>";

    echo "<td>" .  $row['fullname'] . "</td>" . "<br>";

    echo "<td>" . $row[''] . "</td>" . "<br>";

    echo "<td>" .  $row['birthday'] . "</td>" . "<br>";

    echo "<td>" .  $row['mail'] . "</td>" . "<br>";

    echo "</tr>";
    echo "</table>";
}


?>

</body>
</html>