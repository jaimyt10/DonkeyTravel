<?php
require_once "nav.php" ;

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

        echo "<tr>";

        echo "<td>" . "Accounts ID: " . $id . "</td>" . "<br>";

        echo "<td>" . "Naam op Accounts: " . $Accounts->fullname . "</td>" . "<br>";

        echo "<td>" . "accounts geboortedatum: " . $Accounts->birthday . "</td>" . "<br>";

        echo "<td>" . "accounts password: " . $Accounts->password . "</td>" . "<br>";

        echo "<td>" . "Accounts mail: " . $Accounts->mail . "</td>" . "<br>";

        echo "</tr>";
        echo "</table>";


}
?>

