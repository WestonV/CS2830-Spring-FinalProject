<?php
    if(!session_start()){
        header("Location: error.php");
        exit;
    }

    $loggedin = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
    if(!$loggedIn){
        header("Location: ../index.php");
        exit;
    }
?>