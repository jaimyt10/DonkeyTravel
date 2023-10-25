<?php
require_once 'dbConnect.php';

if(isset($_POST["login"]))
{
    if(empty($_POST["mail"]) || empty($_POST["password"]))
    {
        $message = '<label>All fields are required</label>';
    }
    else
    {
        $query = "SELECT * FROM accounts WHERE mail = :mail AND password = :password";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
                'mail'     =>     $_POST["mail"],
                'password'     =>     $_POST["password"]
            )
        );
        $count = $statement->rowCount();
        if($count > 0)
        {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["mail"] = $_POST["mail"];
            header("location:home.php");
        }
        else
        {
            $message = '<label>Wrong Data</label>';
        }
    }
}
