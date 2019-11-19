<?php

session_start();
unset($_SESSION["login"]);
unset($_SESSION['user']);

session_unset();
session_destroy();

header("location:Home_login.php");

?>