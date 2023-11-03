<?php
require_once "nav.php" ;
?><h1>Update accounts</h1><?php
require_once "dbConnect.php";
require_once "Accounts.php";

// Get values from the form
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$mail = $_POST['mail'];



// Create a new Klant object with the new values
$klant = new Accounts($id, $fullname, $birthday, $mail);

// Update the customer record in the database
$sql = $conn->prepare("UPDATE accounts SET fullname=:fullname, birthday=:birthday, mail=:mail
                    WHERE id=:id");
$sql->execute([
    "id" => $id,
    "fullname" => $fullname,
    "birthday" => $birthday,
    "mail" => $mail

]);

echo "Accounts succesvol geüpdatet!";
$accounts = $conn->prepare("
    select * from accounts where  fullname = '$fullname'");
$accounts->execute();

$result = $accounts->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {

    echo "<table>";

    echo "<tr>
    <th>Account ID</th>
    <th>Naam op account</th>
    <th>Password account</th>
    <th>Geboortedatum account </th>
    <th>Account mail</th>
  </tr>";

    echo " <tr>";

    echo "<td>" .  $row['id'] . "</td>" ;

    echo "<td>" .  $row['fullname'] . "</td>" ;

    echo "<td>" . $row['password'] . "</td>" ;

    echo "<td>" .  $row['birthday'] . "</td>" ;

    echo "<td>" .  $row['mail'] . "</td>" ;

    echo "</tr>
";

    echo "</table>";
}

?>
