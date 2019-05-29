<?php

require "config/config.php";

if(isset($_POST['login']))
{
    $email      = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password  = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    
    $user = login($email);

    if($user)
    {
        //Password Verification
        if(password_verify($password, $user['password']))
        {
            session_start();
            $_SESSION['user'] = $user;

            header("location:index.php");
        }
    }
}