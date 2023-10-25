<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css ">
    <title>updatereservering</title>
</head>
<body>
<?php require_once "nav.php" ?>
    <?php

    require_once "dbConnect.php";
    require_once "Reservering.php";

    if (isset($_POST['reser_id'])) {
        // Haal het reservering-ID op uit het formulier
        $reser_id = $_POST['reser_id'];
    
        // Maak een nieuw reservering-object met het reservering-ID
        $reservering = new reservering($reser_id, "", "", "", "");
    
        // Gebruik de getter-methoden om de huidige eigenschappen van de reservering op te halen
        $reser_naam = $reservering->getreser_naam();
        $reser_datum_tijd = $reservering->getreser_datum_tijd();
        $reser_type = $reservering->getreser_type();


    
        global $conn;
        $reserveringen = $conn->prepare("
    select reser_id, reser_naam, reser_datum_tijd, reser_type
    from reserveringen
    where reser_id = :reser_id
    ");
        $reserveringen->execute(["reser_id" => $reser_id]);
    
        // reserveringgegevens in een nieuw formulier laten zien
        echo "<div id='form'> <form  class='form' action='updateReserveringenFormulier3.php' method='post'>";
        foreach ($reserveringen as $reservering) {
            // reser_id mag niet gewijzigd worden
            echo "reser_id: <input type='text' ";
            echo "name='reser_id'";
            echo "value= '" . $reservering["reser_id"] . " '";
            echo " readonly> <br />";
    
            echo "reser_naam: <input type='text' ";
            echo "name='reser_naam'";
            echo "value= '" . $reservering["reser_naam"] . "' ";
            echo " > <br />";
    
            echo "reser_datum_tijd: <input type='text' ";
            echo "name='reser_datum_tijd'";
            echo "value= '" . $reservering["reser_datum_tijd"] . "' ";
            echo " > <br />";
    
            echo "reser_type: <input type='text' ";
            echo "name='reser_type'";
            echo "value= '" . $reservering["reser_type"] . "' ";
            echo " > <br />";

        }
        echo "<input type='submit' name='submit_button' value='Verzenden'>";
        echo "</form></div>";
        echo "</div>";
    
        exit();
    }
    ?>
    