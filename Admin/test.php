<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="toast.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="toast.js"></script>
</head>
<body>

<?php 
$password = "";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password;
$password = "";
if(password_verify($password, $hashed_password)) {
    echo "<p>done</p>";
}

?>
<script src="toast.js"></script>
</body>
</html>
