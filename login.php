<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
    } else {
        header('Location:profile.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Вход</title>
        <link rel="stylesheet" type="text/css" href="style_autorization.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <div class="container">
                <div class="header">
                    <div class="logo"></div>
                    <div class="name"></div>
                </div>
                <div class="reg"> <a href="register.php"> <img src="img/reg.png"> </a> </div>
                <div class="fields">
                    <form method="POST" action="afterlogin.php">
                        <input type="email" placeholder="E-Mail" name="email"> <br>
                        <input type="password" placeholder="Password" name="password"> <br>
                        <input type="submit" name="login" value="Войти">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>



