<?php
    // if(!session_start()){
    //     header("Location: error.php");
    //     exit;
    // }

    // $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
    // if($loggedIn){
    //     header("Location: ../index.php");
    // }
    session_start();

    $adminUsername = "test";
    $adminPassword="pass";
    $username = '';
    $password = '';
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == $adminUsername and $password == $adminPassword){
            $_SESSION['loggedin'] = $username;
            header("location: test.php");
            exit;
        }else{

            echo("Email or password is invalid.<br> Please click <a href='login-form.php'>here to try again</a>.");
        }
    }else{
        header("Location: login-form.php");
    }

?>