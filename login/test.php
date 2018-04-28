<?php
    if(!session_start()){
        header("Location: error.php");
        exit;
    }

    $loggedin = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
    if(!$loggedIn){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <p>Succes<p>
</body>
</html>