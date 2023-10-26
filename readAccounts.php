<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken accounts</title>
</head>
<table>
<?php require_once "nav.php" ;
require_once 'dbConnect.php';?>

<h1>Afdrukken accounts</h1>
<p>Dit zijn alle gegevens uit de accountstabel.</p>
<?php

global $conn;
$accounts = $conn->prepare("
    select * from accounts ");
$accounts->execute();


echo '<table>';

echo "<tr>
    <th>Account ID</th>
    <th>Naam op account</th>
    <th>Password account</th>
    <th>Geboortedatum account </th>
    <th>Account mail</th>
  </tr>";

$result = $accounts->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {

    echo " <tr>";

    echo "<td>" .  $row['id'] . "</td>" ;

    echo "<td>" .  $row['fullname'] . "</td>" ;

    echo "<td>" . $row['password'] . "</td>" ;

    echo "<td>" .  $row['birthday'] . "</td>" ;

    echo "<td>" .  $row['mail'] . "</td>" ;

    echo "</tr>
";
}


?>
</table>
</body>
</html>