<?php
session_start();   
include('server.php') 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enregistrement - Endorium</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
    <section class="login-dark">
            <form method="post" action="server.php">
                <?php include('errors.php'); ?>
                <h2 class="visually-hidden">Enregistrement</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"></div>
                <div class="mb-3"><input class="form-control" type="uername" name="username" placeholder="Username" value="<?php echo $username; ?>"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password_1" id="txtPassword" placeholder="Password"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password_2" id="txtConfirmPassword" placeholder="Repeat Password"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" onclick="return Validate()" >Enregistrement</button></div>
                <script type="text/javascript">
                    function Validate() {
                        var password = document.getElementById("txtPassword").value;
                        var confirmPassword = document.getElementById("txtConfirmPassword").value;
                        if (password != confirmPassword) {
                            alert("Passwords do not match.");
                            return false;
                        }
                        return true;
                    }
                </script>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Connexion</button>
                <a class="forgot" href="#">Vous avez oublier vos identifiants?</a>
            </form>
        </section>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>




