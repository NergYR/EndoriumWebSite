<?php 
<<<<<<< HEAD
session_start(); 

if ($_SESSION['success'] != True) {
    header('location: login.php');
}

?>
 
=======
 session_start(); 
 if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: login.php");
}
?> 
>>>>>>> 2066b13bb4a40ce536c3f2b9b02beabe93a14298

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title> Bienvenue <?PHP echo $_SESSION['username']; ?>!</title>
=======
    <title><?PHP ?> Bienvenue !</title>
>>>>>>> 2066b13bb4a40ce536c3f2b9b02beabe93a14298
</head>
<body>


<<<<<<< HEAD
    <p>Bienvenue <?php $_SESSION["username"];?></p>


    <a <?php session_destroy(); header('Location: login.php'); ?>>Log out</a>



=======
>>>>>>> 2066b13bb4a40ce536c3f2b9b02beabe93a14298
    
</body>
</html>