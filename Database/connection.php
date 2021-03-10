<?php 
session_start();
$con = mysqli_connect("localhost","root","","minor");
if(!$con){
    echo "Error while connecting to database";
}


?>