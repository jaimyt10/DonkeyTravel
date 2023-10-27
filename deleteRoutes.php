<!doctype html>
<html>

<head>
    <title>delete route</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>Delete route</h1>

<div id="form" >
<form action="deleteRoutes2.php" method="post">
    <label for="id">Route ID</label>
    <input type="text" name="id">
    <input type="submit"><br/><br/>
</form>

</div>
</body>