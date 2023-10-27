<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Donkey Travel</title>
</head>

<body>
<div class="nav">
    <a href="index.php">Home</a>

    <div class="dropdown">
        <button class="dropbtn">Reserveringen</button>
        <div class="dropdown-content">
            <a href="createReserveringen.php">Create</a>
            <a href="readReserveringen.php">Read</a>
            <a href="updateReserveringenFormulier1.php">Update</a>
            <a href="deleteReserveringen.php">Delete</a>
            <a href="searchReserveringen.php">Search</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Accounts</button>
        <div class="dropdown-content">
            <a href="readAccounts.php">Read</a>
            <a href="updateAccountsFormulier1.php">Update</a>
            <a href="deleteAccounts.php">Delete</a>
            <a href="searchAccounts.php">Search</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Routes</button>
        <div class="dropdown-content">
            <a href="createRoutes.php">Create</a>
            <a href="readRoutes.php">Read</a>
            <a href="updateRoutesFormulier1.php">Update</a>
            <a href="deleteRoutes.php">Delete</a>
            <a href="searchRoutes.php">Search</a>
        </div>
    </div>
    <a href="logout.php">Logout</a>

</div>
</body>

</html>


