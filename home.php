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
<H1>Lorem Ipsum</H1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda, autem dolorem eos et expedita fugit ipsum minima modi natus quaerat recusandae saepe, tempore totam voluptas? Natus, sit, voluptate. Velit?</p>



