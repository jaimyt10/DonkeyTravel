<?php
require_once 'dbConnect.php';
$login = FALSE;

if(isset($_POST["login"]))
{
    if(empty($_POST["mail"]) || empty($_POST["password"]))
    {
        $message = '<label>All fields are required</label>';
    }
    else
    {
        $query = "SELECT * FROM accounts WHERE mail = :mail";
        $values = [':mail' => $_POST["mail"]];
        try {
            $statement = $conn->prepare($query);

            $statement->execute($values);

        }
        catch (PDOException $e)
        {
            /* Query error. */
            echo 'Query error.';
            die();
        }
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if (is_array($row))
        {
            echo $_POST['password'];
            if (password_verify($_POST['password'], $row['password']))
            {
                /* The password is correct. */
                $_SESSION['loggedin'] = TRUE;
                header('Location: home.php');

            }
        }

    }
}
