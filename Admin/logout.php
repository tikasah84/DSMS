<?php

session_start();
unset($_SESSION['ADMIN_LOGIN']);
unset($_SESSION['ADMIN_username']);
header('location:login_admin.php');
die();
?>