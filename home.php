<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}

require_once 'nav.php';
?>
<H1>Donkey Travel</H1>

<H2>Welkom <?php echo $_SESSION['fullname']?>!</H2>


