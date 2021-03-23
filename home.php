<?php 
session_start(); 

if ($_SESSION['success'] != True) {
    header('location: login.php');
}

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bienvenue <?PHP echo $_SESSION['username']; ?>!</title>
</head>
<body>


    <p>Bienvenue <?php $_SESSION["username"];?></p>


    <a <?php session_destroy(); header('Location: login.php'); ?>>Log out</a>



    
</body>
</html>