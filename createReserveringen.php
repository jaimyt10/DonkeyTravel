<?php

require_once "dbConnect.php";
require_once 'nav.php';
$fullname=$_SESSION['fullname']

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
    <input readonly value="<?php echo $fullname?>" type="text" id = "reser_naam" name="reser_naam"><br/>
    <label for="reser_datum_tijd">Datum en tijd van reservering:</label>
    <input type="date" id = "reser_datum_tijd" name="reser_datum_tijd">
    <script type="text/javascript">
        reser_datum_tijd.min = new Date().toISOString().split("T")[0];
    </script>
    <br/>
    <label for="reser_datum_tijd_aan">Datum en tijd van aanmaken reservering:</label>
    <input type="datetime-local" id = "reser_datum_tijd_aan" name="reser_datum_tijd_aan">
    <br/>
    <label for="reser_type">Reserverings type:</label><br/>
    <select id="reser_type" name="reser_type">
        <option value="enkel">Enkeltje</option>
        <option value="retour">Retourtje</option>
        <option value="rondreis">Rondreisje</option>
    </select>

    <input type="submit">
</form>
</div>
</body>
</html>