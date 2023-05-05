<?php
include "SignUpController.php";
 //if(isset($_POST['submit'])){

 //receiving data from the register page

    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = $_POST["password"];

    // validation field
    $signup = new signUpController($email,$password,$password1);
    //$signup->
 //}



