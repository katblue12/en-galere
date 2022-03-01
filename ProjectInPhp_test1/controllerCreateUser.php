<?php
include './vue/createUser.php';
include './config/connexionBdd.php';
include './model/userClass.php';


if (!empty(isset($_POST['name_user']))&& !empty(isset($_POST['surname_user']))&& !empty(isset($_POST['email_user']))&&!empty(isset($_POST['telephone_user']))
&& !empty(isset($_POST['address1_user']))&& !empty(isset($_POST['address2_user']))
&& !empty(isset($_POST['city_user']))&&!empty(isset($_POST['postcode_user']))
&& !empty(isset($_POST['password_user']))&& !empty(isset($_POST['confirmPassword']))){
   
        $user = new User();

        if($_POST['password_user']!=$_POST['confirmPassword']){

            echo 'passwords do not match';
        }
        else if($user->userExist($bdd)){
            echo 'user already exists';
        }
        
        else {
                $user->setName($_POST['name_user']);
                $user->setSurname($_POST['surname_user']);
                $user->setEmail($_POST['email_user']);
                $user->setTelephone($_POST['telephone_user']);
                $user->setAddress1($_POST['address1_user']);
                $user->setAddress2($_POST['address2_user']);
                $user->setCity($_POST['city_user']);
                $user->setPostcode($_POST['postcode_user']);
                $user->setPassword(password_hash($_POST['password_user'], PASSWORD_DEFAULT));
                $user->createUser($bdd,$_POST['name_user'], $_POST['surname_user'], $_POST['email_user'], $_POST['telephone_user'],$_POST['address1_user'],$_POST['address2_user'],$_POST['city_user'], $_POST['postcode_user'], $_POST['password_user']);     
        } 
        
} 