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


$account = new Accounts($fullname, $birthday, password_hash($password, PASSWORD_DEFAULT), $mail);
$account->Create();
$_SESSION['fullname'] = $fullname;
header("location:index.php");
?>
</body>
</html>
