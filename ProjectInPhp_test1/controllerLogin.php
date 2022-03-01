<?php
//----------------------------------------------
//          INCLUDES
//-----------------------------------------------
include './vue/login.php';
include './config/connexionBdd.php';
include './model/userClass.php';

//----------------------------------------------
//          SESSION
//-----------------------------------------------
// $user -> setPassword(password_hash($motpasse, PASSWORD_DEFAULT));
// password_verify($motpasse,$data['password_user']);


//----------------------------------------------
//          TESTS
//-----------------------------------------------
if(isset($_POST['email_user'])&& isset($_POST['password_user'])){
    $connect =     new User();
    $connect -> setEmail($_POST['email_user']);
    $connect -> setPassword($_POST['password_user']);
    if ($connect->connectUser($bdd)){
        header('location: ./controllerMorning.php');

       }
    else{
        header('location: ./controllerGenError.php');
    }
}




