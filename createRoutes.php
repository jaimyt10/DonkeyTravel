<?php

require_once "dbConnect.php";

require_once 'nav.php';

?>


<!doctype html>
<html>
<head>
    <title>Create gast</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<h1>Create routes</h1>

<div id="form">
<form  action="createRoutes2.php" method="post">
    <label for="route_naam">Naam van route:</label>
    <input type="text" id = "route_naam" name="route_naam"><br/>

    <label for="route_locatie"> Locatie van route:</label>
    <input type="text" id = "route_locatie" name="route_locatie"><br/>

    <label for="route_lengte"> Lengte van route in km:</label>
    <input type="text" id = "route_lengte" name="route_lengte"><br/>

    <label for="route_duur">Duur van route in min:</label>
    <input type="text" id="route_duur" name="route_duur"><br/>

    <input type="submit">
</form>
</div>
</body>
</html>