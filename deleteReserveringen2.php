<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>delete reservering</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>delete reservering</h1>

<?php

// Anjo Eijeriks
require "Reservering.php";                    // nodig om object te maken
$reser_id = $_POST["reser_id"];    // uitlezen vakje van deleteStudentForm1
$dell_art = new Reservering();




$dell_art->Delete($reser_id);

header('Location: home.php');



?>


