<?php

//var_dump($_POST);

/*
 * store this information for the example
 * DO NOT DO THIS ON A PRODUCTION SITE
 * username: yeah
 * password: bro
 * password hash: 0cfe0ef3a357503c4a4538414b870ca1
 */

//Authentication variables
$username = "yeah";
$passHash = "0cfe0ef3a357503c4a4538414b870ca1";

//Authenticate username
if($username === $_POST["user"]){
    echo "Username authenticated";
    if($passHash === md5($_POST["pass"])){
        echo "Password Authenticated";
        session_start();
        $_SESSION["status"] = "loggedIn";
        $_SESSION["username"] = $_POST["user"];
    }
}
?>
