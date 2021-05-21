<?php

session_start();
unset($_SESSION['RECEP_LOGIN']);
unset($_SESSION['RECEP_email']);
header('location:index.php');
die();
?>