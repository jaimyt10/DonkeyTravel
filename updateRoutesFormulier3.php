<?php
require_once "nav.php" ;
?>
<h1>Update route</h1>

<?php
require_once "dbConnect.php";
require_once "Routes.php";

// Get values from the form
$id = $_POST['id'];
$route_naam = $_POST['route_naam'];
$route_locatie = $_POST['route_locatie'];
$route_duur = $_POST['route_duur'];



// Create a new Klant object with the new values
$klant = new Routes($id, $route_naam, $route_locatie, $route_duur);

// Update the customer record in the database
$sql = $conn->prepare("UPDATE routes SET route_naam=:route_naam, route_locatie=:route_locatie, route_duur=:route_duur
                    WHERE id=:id");
$sql->execute([
    "id" => $id,
    "route_naam" => $route_naam,
    "route_locatie" => $route_locatie,
    "route_duur" => $route_duur

]);

echo "Routes succesvol geüpdatet!";

$routes = $conn->prepare("
    select * from routes where  route_naam = '$route_naam'");
$routes->execute();

$result = $routes->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {

    echo "<table>";

    echo "<tr>
    <th>Route ID</th>
    <th>Naam van route</th>
    <th>Locatie van route</th>
    <th>Lengte van route</th>
    <th>Duur van route</th>
  </tr>";

    echo "<tr>";

    echo "<td>" .  $row['id'] . "</td>" . "<br>";

    echo "<td>" .  $row['route_naam'] . "</td>" . "<br>";

    echo "<td>" . $row['route_locatie'] . "</td>" . "<br>";

    echo "<td>" . $row['route_lengte'] . "</td>" . "<br>";

    echo "<td>" .  $row['route_duur'] . "</td>" . "<br>";

    echo "</tr>";
    echo "</table>";
}
?>
