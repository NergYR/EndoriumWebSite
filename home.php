<?php 
 session_start(); 
 if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: login.php");
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?PHP ?> Bienvenue !</title>
</head>
<body>


    
</body>
</html>