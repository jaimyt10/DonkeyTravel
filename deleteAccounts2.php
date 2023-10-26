<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>delete account</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>delete account</h1>

<?php

// Anjo Eijeriks
require "Accounts.php";                    // nodig om object te maken
$id = $_POST["id"];    // uitlezen vakje van deleteStudentForm1
$dell_art = new Accounts();




$dell_art->Delete($id);




?>


