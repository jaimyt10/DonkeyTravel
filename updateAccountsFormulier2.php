<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css ">
    <title>updateAccounts</title>
</head>
<body>
<?php require_once "nav.php" ?>
    <?php

    require_once "dbConnect.php";
    require_once "Accounts.php";

    if (isset($_POST['id'])) {
        // Haal het Accounts-ID op uit het formulier
        $id = $_POST['id'];
    
        // Maak een nieuw Accounts-object met het Accounts-ID
        $Accounts = new Accounts($id, "", "", "", "");
    
        // Gebruik de getter-methoden om de huidige eigenschappen van de Accounts op te halen
        $fullname = $Accounts->getfullname();
        $birthday = $Accounts->getbirthday();
        $mail = $Accounts->getmail();


    
        global $conn;
        $accounts = $conn->prepare("
    select id, fullname, birthday, mail, password
    from accounts
    where id = :id
    ");
        $accounts->execute(["id" => $id]);
    
        // Accountsgegevens in een nieuw formulier laten zien
        echo "<div id='form'> <form  class='form' action='updateAccountsFormulier3.php' method='post'>";
        foreach ($accounts as $Accounts) {
            // id mag niet gewijzigd worden
            echo "ID: <input type='text' ";
            echo "name='id'";
            echo "value= '" . $Accounts["id"] . " '";
            echo " readonly> <br />";
    
            echo "Fullname: <input type='text' ";
            echo "name='fullname'";
            echo "value= '" . $Accounts["fullname"] . "' ";
            echo " > <br />";
    
            echo "Birthday: <input type='date' ";
            echo "name='birthday'";
            echo "value= '" . $Accounts["birthday"] . "' ";
            echo " > <br />";

            echo "Password: <input type='text' ";
            echo "name='password'";
            echo "value= '" . $Accounts["password"] . "' ";
            echo " readonly> <br />";

            echo "Email: <input type='text' ";
            echo "name='mail'";
            echo "value= '" . $Accounts["mail"] . "' ";
            echo " > <br />";

        }
        echo "<input type='submit' name='submit_button' value='Verzenden'>";
        echo "</form></div>";
        echo "</div>";
    
        exit();
    }
    ?>
    