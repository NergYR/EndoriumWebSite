<?php
<<<<<<< HEAD
session_start();
// include('serverl.php');   
if ($_SESSION['success'] === True) {
    header('location: home.php');
}
=======
session_start();   
>>>>>>> 2066b13bb4a40ce536c3f2b9b02beabe93a14298
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion - Endorium</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
    <section class="login-dark">
<<<<<<< HEAD
            <form action="serverl.php" method="post" >
                <?php include('errors.php'); ?>
                <h2 class="visually-hidden">Connexion</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="mb-3"><input class="form-control" type="username" name="username" placeholder="Username"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Connexion</button></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" onclick="location.href = 'register.php'";>Enregistrement</button>

                <a class="forgot" href="#">Vous avez oublier vos identifiants?</a>
=======
            <form method="post">
                <h2 class="visually-hidden">Connexion</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Connexion</button></div><a class="forgot" href="#">Vous avez oublier vos identifiants?</a>
                <div class="mb-3"><button class="btn btn-primary d-block w-50" type="submit">Enregistrement</button>
>>>>>>> 2066b13bb4a40ce536c3f2b9b02beabe93a14298
            </form>
        </section>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>


