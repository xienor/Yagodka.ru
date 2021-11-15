<?php
    include('db_connection.php');
    $id = $_GET['id'];
    $sql = "SELECT `path` FROM `images` WHERE productid = $id";
    $row = mysqli_query($connection, $sql);
    $imagepathtmp = mysqli_fetch_assoc($row);
    $imagepath = $imagepathtmp['path'];
    //echo $imagepath;
    header('Content-Type: image/jpeg');
    $img = imageCreateFromJpeg($imagepath);
    imageJpeg($img, null, 100);
    ImageDestroy($image);
?>