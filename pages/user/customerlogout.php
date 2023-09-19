<?php

// start user session
session_start();

// unset user session variables
unset($_SESSION['use']);


// redirect to user login page
header('Location: ../public/login.php');
exit;


?>