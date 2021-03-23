<?php
session_start();


// connect to the database
$DBHOST = "91.234.194.198";
$DBNAME = "cp1157376p33_endorium_users";
$DBUSER = "cp1157376p33_consol";
$DBPASSWORD = "RUwBf7ZC-sz@";


$db = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
mysqli_select_db($dn, 'users');


$username = $_POST['username'];
$password = $_POST["password"];


$query1 = "SELECT * FROM users WHERE username='$username'";
$result1 = mysql_query($query1);
$count1 = mysql_num_rows($result1);


if($count1 == 1){
  
    $query2 = "SELECT password FROM users WHERE username='$username'";
    $result2 = mysql_query($query2);
    $row = mysql_fetch_array($result2, MYSQL_ASSOC);
    $hash = $row['password'];
    //echo $result2; //Testing to see if am getting the hashed password. 
    if(password_verify($password, $hash )){
        $seconds = 120 + time();
        setcookie(loggedIn, date("F js - g:i a"), $seconds);
        $_SESSION["username"] = $username;
        header("location:home.php");
    }
    else{
        echo "Invalid info1";
    }
}
else{
        echo "Invalid info2";
}




/*



if(isset($password)){
  if (password_verify($password, $hash)) {
    $_SESSION["username"] = $username;
    
    header("Location: home.php");
  } else {
    echo 'Le mot de passe est invalide.';
    $var = password_verify($password, $hash);
    echo $var;
  }
}else{
  echo "password not set";
}


if(password_verify($password, $password_crypt)){
  $_SESSION["username"] = $username;
  header("Location: home.php");
}else{
  echo "mot de passe incorect";
}

if (password_verify($password, $password_crypt))
  {
    $_SESSION['username'] = $username;
  //  $_SESSION['success'] = True;
    header("Location: home.php");
    
  }else{
    echo "Mot de passe incorrect";
    die;
}
*/


?>