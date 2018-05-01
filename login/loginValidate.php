<?php
    $adminUsername = "test";
    $adminPassword="pass";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == $adminUsername and $password == $adminPassword){
            header("location: test.php");
        }else{

            echo("Email or password is invalid.<br> Please click <a href='login-form.php'>here to try again</a>.");
        }
    }else{
        header("Location: login-form.php");
    }

?>