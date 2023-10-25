<?php

require_once "dbConnect.php";
require_once 'nav.php';


?>


<!doctype html>
<html>
<head>
    <title>Create reserveringen</title>
</head>
<body>

<h1>Create reserveringen</h1>

<div id="form">
<form  action="createReserveringen2.php" method="post">
    <label for="reser_naam">Naam op reservering:</label>
    <input type="text" id = "reser_naam" name="reser_naam"><br/>
    <label for="reser_datum_tijd">Datum en tijd van reservering:</label>
    <input type="date" id = "reser_datum_tijd" name="reser_datum_tijd">
    <script type="text/javascript">
        reser_datum_tijd.min = new Date().toISOString().split("T")[0];
    </script>
    <br/>
    <label for="reser_datum_tijd_aan">Datum en tijd van aanmaken reservering:</label>
    <input type="datetime-local" id = "reser_datum_tijd_aan" name="reser_datum_tijd_aan">
    <br/>
    <label for="reser_type">Reserverings type:</label>
    <input type="text" id="reser_type" name="reser_type"><br/>
    <input type="submit">
</form>
</div>
</body>
</html>