<?php

require "config/config.php";

if(isset($_POST['register']))
{
    $password1      = $_POST['password1'];
    $password2      = $_POST['password2'];

    if($password1 != $password2)
    {
        header("location:register.php?err=1");
    }
    elseif(validateDate($_POST['birth_date']) == false)
    {
        header("location:register.php?err=2");
    }

    $email          = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $fullname           = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $gender         = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $birth_date     = $_POST['birth_date'];
    $phone_number   = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_STRING);
    $address        = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);


    $password3 = password_hash($password1, PASSWORD_DEFAULT);

    $result = save($email, $password3, $fullname, $address, $gender, $birth_date, $phone_number);

    if($result)
    {
        header("location:register.php?success=1");
    }
    else
    {
        header("location:register.php?err=3");
    }
}