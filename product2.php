<?php
    //include('db_connection.php');
    //$id = $_GET['id'];
    //$sql = "SELECT `path` FROM `images` WHERE productid = $id";
    //$row = mysqli_query($connection, $sql);
   // $imagepathtmp = mysqli_fetch_assoc($row);
   // $imagepath = $imagepathtmp['path'];
   // $aboutrow = "SELECT `name`, `color`, `razmer` FROM `products`";
   // $about = mysqli_query($connection, $aboutrow);
  //  $aboutproduct = mysqli_fetch_assoc($about);
?>
<!DOCTYPE html>
<html lang="ru">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Пример веб-страницы</title>
        <link rel="stylesheet" type="text/css" href="style_product2.css">
    </head>
    <body>
        <div class="container">
            <div class=image>
                <div class="slider">

                    <div class="slides">
                        <input type="radio" name="r" id="r1" checked>
                        <input type="radio" name="r" id="r2">
                        <input type="radio" name="r" id="r3">
                        <input type="radio" name="r" id="r4">

                        <div class="slide"><img src="img/reg.png" alt=""></div>
                        <div class="slide"><img src="img/profile_image.png" alt=""></div>
                        <div class="slide"><img src="img/exit.png" alt=""></div>
                        <div class="slide"><img src="img/logo.png" alt=""></div>

                    <div class="navigation">
                        <label for="r1" class="bar"></label>
                        <label for="r2" class="bar"></label>
                        <label for="r3" class="bar"></label>
                        <label for="r4" class="bar"></label>
                    </div>

                    </div>
                </div>

                
            </div>
            <div class=about>
                Название: <?php echo $aboutproduct["name"];?> <br>
                Цвет: <?php echo $aboutproduct["color"];?> <br>
                Размер: <?php echo $aboutproduct["razmer"];?> <br>
            </div>
        </div>
    </body>
</html>