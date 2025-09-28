<?php

/*this php file is for redirecting users from sign up to dashboard to edit user.
info will be displayed in edit_user, where edit_user can only be accessed through dashboard.*/
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION['name'] = $_POST['Name'];
    $_SESSION['email'] = $_POST['Email'];
    $_SESSION['password'] = $_POST['Password'];

    header("Location: dashboard.php");
    exit;
}
else{
    header("Location:signup.php");
    exit;
}









?>