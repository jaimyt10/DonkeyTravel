<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css ">
    <title>updateRoutes</title>
</head>
<body>
<?php require_once "nav.php" ?>
    <?php

    require_once "dbConnect.php";
    require_once "Routes.php";

    if (isset($_POST['id'])) {
        // Haal het Routes-ID op uit het formulier
        $id = $_POST['id'];
    
        // Maak een nieuw Routes-object met het Routes-ID
        $Routes = new Routes($id, "", "", "", "");
    
        // Gebruik de getter-methoden om de huidige eigenschappen van de Routes op te halen
        $route_naam = $Routes->getroute_naam();
        $route_locatie = $Routes->getroute_locatie();
        $route_duur = $Routes->getroute_duur();


    
        global $conn;
        $routes = $conn->prepare("
    select id, route_naam, route_locatie, route_duur, route_lengte
    from routes
    where id = :id
    ");
        $routes->execute(["id" => $id]);
    
        // Routesgegevens in een nieuw formulier laten zien
        echo "<div id='form'> <form  class='form' action='updateRoutesFormulier3.php' method='post'>";
        foreach ($routes as $Routes) {
            // id mag niet gewijzigd worden
            echo "ID: <input type='text' ";
            echo "name='id'";
            echo "value= '" . $Routes["id"] . " '";
            echo " readonly> <br />";
    
            echo "Naam route: <input type='text' ";
            echo "name='route_naam'";
            echo "value= '" . $Routes["route_naam"] . "' ";
            echo " > <br />";
    
            echo "Locatie route: <input type='text' ";
            echo "name='route_locatie'";
            echo "value= '" . $Routes["route_locatie"] . "' ";
            echo " > <br />";

            echo "Lengte route in km: <input type='text' ";
            echo "name='route_lengte'";
            echo "value= '" . $Routes["route_lengte"] . "' ";
            echo " > <br />";

            echo "Duur route in min: <input type='text' ";
            echo "name='route_duur'";
            echo "value= '" . $Routes["route_duur"] . "' ";
            echo " > <br />";

        }
        echo "<input type='submit' name='submit_button' value='Verzenden'>";
        echo "</form></div>";
        echo "</div>";
    
        exit();
    }
    ?>
    