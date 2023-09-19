<?php

// start admin session
session_start();

// unset admin session variables
unset($_SESSION['admin']);


// redirect to admin login page
header('Location: adminlogin.php');
exit;



?>