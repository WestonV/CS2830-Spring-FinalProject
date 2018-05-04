<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    
    <!--Materialize CSS: Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script
        src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"
        integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="
        crossorigin="anonymous">
    </script>
    
    <style>
      footer{
            position: absolute;
            bottom: 0;
            left: 0;
        }
    </style>
</head>
<body>

<!--    nav bar design -->
    <nav class="black">
        <div class="navbar-wrapper container">
            <a href="../index.php" class="brand-logo">Weston's Movies</a>
            <ul class="right">
                <li><a href="../index.php">Home</a></li>
                <li><a href="login-form.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- login form -->
<form action="loginValidate.php" method="POST" id="loginForm">    
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card">
                <div class="card-action white black-text">
                    <h3>Login Form</h3>
                </div>
                <div class="card-content">
                    <div class="form-field">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div><br>
                    
                    <div class="form-field">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    
                    <div class="form-field">
                        <button name="login" type="submit" id="loginButton" class="btn-large waves-effect waves-light black">Login</button>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
  </form>  
    
    <!-- footer -->
    <footer class="page-footer black">
        <div class="footer-copyright">
            <div class="container">
            Made By: Weston Verhulst
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

<!--    jQuery import using Google CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Materialize JS: Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>