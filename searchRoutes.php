<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>Search routes</h1>
<div id="form">
<form  action="searchRoutes2.php" method="post">
    <label for="id">Route ID</label>
<input type="text" id ="id" name="id">
<input type="submit">
</form>
</div>
</body>
</html>