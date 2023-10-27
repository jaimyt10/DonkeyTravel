<!doctype html>
<html>
<head>
    <title>delete route</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>Delete Route</h1>

<?php

require "Routes.php";                    // nodig om object te maken
$id = $_POST["id"];    // uitlezen vakje van deleteStudentForm1
$dell_art = new Routes();




$dell_art->Delete($id);

header('Location: home.php');


?>


