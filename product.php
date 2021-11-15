<?php
    include('db_connection.php');
    $id = $_GET['id'];
    $sql = "SELECT `path` FROM `images` WHERE productid = $id";
    $row = mysqli_query($connection, $sql);
    $imagepathtmp = mysqli_fetch_assoc($row);
    $imagepath = $imagepathtmp['path'];
    $aboutrow = "SELECT `name`, `color`, `razmer` FROM `products`";
    $about = mysqli_query($connection, $aboutrow);
    $aboutproduct = mysqli_fetch_assoc($about);
?>
<!DOCTYPE html>
<html lang="ru">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Пример веб-страницы</title>
        <link rel="stylesheet" type="text/css" href="style_product.css">
    </head>
    <body>
        <div class="container">
            <div class=image>
                <img src="../<?php echo $imagepath;?>">
            </div>
            <div class=about>
                Название: <?php echo $aboutproduct["name"];?> <br>
                Цвет: <?php echo $aboutproduct["color"];?> <br>
                Размер: <?php echo $aboutproduct["razmer"];?> <br>
            </div>
        </div>
    </body>
</html>