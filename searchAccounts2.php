<?php
require_once "nav.php" ;
?><h1>Search accounts</h1>
<?php
require_once "dbConnect.php";
require "Accounts.php";

$id=$_POST["id"];
$Accounts = new Accounts($id);
$Accounts->Search();

    $result = $_SESSION['result'];


// Toon de eigenschappen van het Accounts als het gevonden is

    if ($result) {

        $Accounts = new Accounts( $result["fullname"], $result["birthday"], $result["password"], $result["mail"]);

        echo "<table>";

        echo "<tr>
    <th>Account ID</th>
    <th>Account naam</th>
    <th>Account geboortedatum</th>
    <th>Account password (hashed)</th>
    <th>Account email</th>
  </tr>";

        echo "<tr>";

        echo "<td>" .  $id . "</td>" ;

        echo "<td>" .  $Accounts->fullname . "</td>";

        echo "<td>" .  $Accounts->birthday . "</td>" ;

        echo "<td>" .  $Accounts->password . "</td>";

        echo "<td>" . $Accounts->mail . "</td>" ;

        echo "</tr>";
        echo "</table>";


}
?>

