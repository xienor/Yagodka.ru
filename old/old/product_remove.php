<?php
    include("db_connection.php");
    $id = $_GET["id"];
    $sql = "SELECT `path` FROM `images` WHERE productid = $id";
    $row = mysqli_query($connection, $sql);
    $imagepathtmp = mysqli_fetch_assoc($row);
    $imagepath = $imagepathtmp['path'];
    unlink($imagepath);
    mysqli_query($connection, "DELETE FROM `products` WHERE `id`=$id");
    mysqli_query($connection, "DELETE FROM `images` WHERE productid=$id");
    
?>