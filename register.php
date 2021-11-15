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
        <title>Регистрация</title>
        <link rel="stylesheet" type="text/css" href="style_registration.css">
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
                <div class="fields">
                    <form method="POST" action="afterregister.php">
                        <input type="text" placeholder="Login" name="login"> <br> <br>
                        <input type="text" placeholder="E-Mail" name="email"> <br> <br>
                        <input type="password" placeholder="Password" name="password"> <br> <br>
                        <input type="password" placeholder="Password repeat" name="passwordrepeat"> <br> <br>
                        <input type="submit" name="register" value="Зарегистрироваться">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>