<?php 
session_start();

//session_unset('is_user_login'); // delete only one value
session_destroy(); // delete all session

header('location:login.php');
?>