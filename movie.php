<?php
    session_start();
    if(!isset($_SESSION['loggedin'])){
        header("Location: login/login-form.php");
        die();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weston's Movies</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/moviePage.css"/>
    <!--Materialize CSS: Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  

</head>
<body>
    
    <?php include 'components/white-navbar.php' ?>

    <h5 class="center">Welcome to Weston's Movies review site. Checkout all the movies I've made reviews for below!</h5>
    <div class="carousel black">
        <a onclick="updateTrailer('wind-river'); getMovieInfo('wind-river');" id="wind-river" class="carousel-item hoverable"><img src="https://image.tmdb.org/t/p/w500/pySivdR845Hom4u4T2WNkJxe6Ad.jpg"></a>
        <a onclick="updateTrailer('thor-ragnarok'); getMovieInfo('thor-ragnarok');" id="thor-ragnarok"  class="carousel-item hoverable"><img src="https://image.tmdb.org/t/p/w500/rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg"></a>
        <a onclick="updateTrailer('ready-player-one'); getMovieInfo('ready-player-one');" id="ready-player-one" class="carousel-item hoverable"><img src="https://image.tmdb.org/t/p/w500/pU1ULUq8D3iRxl1fdX2lZIzdHuI.jpg"></a>
        <a onclick="updateTrailer('kingsman-a-golden-circle'); getMovieInfo('kingsman-a-golden-circle');" id="kingsman-a-golden-circle" class="carousel-item hoverable"><img src="https://image.tmdb.org/t/p/w500/34xBL6BXNYFqtHO9zhcgoakS4aP.jpg"></a>
        <a onclick="updateTrailer('get-out'); getMovieInfo('get-out');" id="get-out" class="carousel-item hoverable"><img src="https://image.tmdb.org/t/p/w500/1SwAVYpuLj8KsHxllTF8Dt9dSSX.jpg"></a>
    </div>
    <div id="message" class="center">Click on a movie to see the trailer, brief discription, and my rating.</div>
    <iframe id="youtubeVid" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <div id="movieInfo"> <p id="infoBox" class="white-text center"></p> </div>
    <h1 id="rating" class="center"></h1>


    <?php include 'components/white-footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     <!--jQuery import using Google CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> <!-- Materialize JS: Compiled and minified JavaScript -->
    <script src="js/initCarousel.js"></script>
    <script src="js/updateTrailer.js"></script>
</body>
</html>