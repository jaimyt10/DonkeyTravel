<!doctype html>
<html>

<head>
    <title>delete account</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>Delete account</h1>

<div id="form" >
<form action="deleteAccounts2.php" method="post">
    <label for="id">Account ID</label>
    <input type="text" name="id">
    <input type="submit"><br/><br/>
</form>

</div>
</body>