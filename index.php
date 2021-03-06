<?php
require_once 'assets/config/config.php';
require_once "vendor/autoload.php";
require_once 'loginFunctions.php';

use Library\Database as DB;
use Library\Users as Login;

//echo "<pre>" . print_r($_SESSION, 1) . "</pre>";
$login = new Login;

$submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if (isset($submit) && $submit === 'enter') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $result = $login->read($username, $password);

    if ($result) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    }
}

$_SESSION['api_key'] = bin2hex(random_bytes(32)); // 64 characters long
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <title>The Chalkboard Quiz</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
    </head>
    <body>
        <noscript>
        <h1>Sorry, but you need Javascript enabled to use this website.</h1>
        </noscript>

        <section class="main">
            <p class="banner">The Chalkboard Quiz by <a class="website" href="https://www.miniaturephotographer.com/">The Miniature Photographer</a></p>

            <a class="logout" title="Logout of Website" href="logout.php">Logout</a>

            <div id="header">
                <div id="startBtn">
                    <a class="logo" id="customBtn" title="Start Button" href="game.php"><span>Start Button</span></a>
                </div>

                <a id="loginMessage" title="Please Login" href="login.php">Login</a>

                <form id="loginForm" class="login" action="index.php" method="post">

                    <input type="hidden" name="action" value="44c5913657a376274ad05bc1291e0a811bd73e59a1e67b08eb9f96b6962a7b6b">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" value="" tabindex="1" autofocus="">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" tabindex="2">
                    <input id="submit" type="submit" name="submit" value="enter" tabindex="3">

                </form>

                <a id="registerMessage" title="Please Register" href="register.php">Register</a>

                <div id="loginInfo">
                    <h3 class="welcome">Welcome to Chalkboard Quiz</h3>
                </div>

            </div>
            <div id="triviaInfo">
                <h2>Welcome to Chalkboard Quiz</h2>
                <p>This is a JavaScript Quiz that is fun and educational. Many improvements are starting to take place, such as a login/registration that is almost done. It's a simple registration process that will bring many new features to the quiz and I give my word that I will never sell or give your email address to a 3rd Party. I will be setting up a guest account for those who still refuse to register, but a lot of the features will not available to the guess account. Setting up a login will enable me to take "The Chalkboard Quiz" to the next level, so I recommend that everyone register. I will be updating this quiz in the weeks to follow, so please check back from time to time where I will give details about the new features that are added. So in the meantime, please register and login. When you login a big blue/green start button will appear that once clicked will take you to the quiz.</p>
            </div>
        </section> <!-- End of Section -->
        <footer>
            &copy; The Miniature Photographer
            <div class="content">
                <a class="menuExit" title="The Miniature Photographer" href="https://www.miniaturephotographer.com/">The Miniature Photographer</a>
                <!--        <a title="Terms of Service" href="#">Terms of Service</a>-->
            </div>
            Dedicated to Mildred I. Pepp (my Mom) 10-29-1928 / 02-26-2017
        </footer>

        <script type="text/javascript" src="assets/js/login.js"></script>
    </body>
</html>
