<?php

    if(!session_start()){
        header("Location: error.php");      //if the session cannot start, show error page
        exit;
    }

    $loggedin = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];      //check to see if user has already logged on

    if($loggedIn){
        header("Location: ../index.html");
        exit;
    }

    $action = empty($_POST['action'])? '' : $_POST['action'];

    if($action == 'do_login'){
        handle_login();
    }else{
        login_form();
    }

    function handle_login(){
        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];

        if($username == "test" && $password == "pass"){
            $_SESSION['loggedin'] = $username;
            header("Location: ../index.html");
            exit;
        }else{
            $error = "Error: Incorrect username or password";
            require "login-form.php";
        }
    }

    function login_form(){
        $username = "";
        $error = "";
        require "login-form.php";
    }
?>