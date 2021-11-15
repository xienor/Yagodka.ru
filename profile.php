<!DOCTYPE html>
<html lang="ru">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yagodka.ru|Профиль</title>
        <link rel="stylesheet" type="text/css" href="style_profile.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="logo">
                <div class="logo_image"></div>
                <div class="logo_name"></div>
                </div>
            </div>
            <div class="main_container">
                <div class="main_sidebar">
                        <form class="exit"> <input type="submit" formaction="exit.php" formmethod="POST" name="exit" class="exit" src="img/exit.png" value="Выйти"> </form>
                </div>
                <div class="content">
                    <div class="profile_image_container">
                        <div class="profile_image"></div>
                    </div>
                    <div class="about_container">
                        <div class="about"></div>
                        <div class="my_products">
                            <form action="product_select.php"> <input type="image" class="my_products" name="my_products" src="img/my_products.png"></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>