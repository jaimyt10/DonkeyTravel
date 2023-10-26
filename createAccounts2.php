<!doctype html>
<html>
<head>
    <title>Create Accounts</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>Create Accounts</h1>

<?php
require "Accounts.php";

$fullname=$_POST["fullname"];
$birthday=$_POST["birthday"];
$password=$_POST["password"];
$mail=$_POST["mail"];


$account = new Accounts($fullname, $birthday, $password, $mail);
$account->Create();

header("location:index.php");
?>
</body>
</html>
