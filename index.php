<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="authenticate.php" method="post">
        <label for="mail">
        </label>
        <input type="email" name="mail" placeholder="mail" id="mail" required>
        <label for="password">
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>

        <p>Need to create an account? <a href="Register-form.php">Register here</a>.</p>
        <p>Need to change password? <a href="Changepassword-form.php">Change here</a>.</p>

        <input type="submit" value="Login">
    </form>

</div>


</body>
</html>
<?php


require "dbConnect.php";
?>