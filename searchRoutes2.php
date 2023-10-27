<?php
require_once "nav.php" ;
?>
<h1>Search routes</h1>

<?php
require_once "dbConnect.php";
require "Routes.php";

$id=$_POST["id"];
$Routes = new Routes($id);
$Routes->Search();

    $result = $_SESSION['result'];


// Toon de eigenschappen van het Routes als het gevonden is

    if ($result) {

        $Routes = new Routes( $result["route_naam"], $result["route_locatie"], $result["route_lengte"], $result["route_duur"]);

        echo "<table>";
         echo "<tr>
    <th>Route ID</th>
    <th>Naam van route</th>
    <th>Locatie van route</th>
    <th>Lengte van route</th>
    <th>Duur van route</th>
  </tr>";

        echo "<tr>";

        echo "<td>" . $id . "</td>" ;

        echo "<td>" . $Routes->route_naam . "</td>";

        echo "<td>"  . $Routes->route_locatie . "</td>" ;

        echo "<td>"  . $Routes->route_lengte . "</td>" ;

        echo "<td>"  . $Routes->route_duur . "</td>" ;

        echo "</tr>";
        echo "</table>";


}

?>

