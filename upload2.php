<?php
    $ection = 'store_image.php?id=' . $_GET["id"];
    //echo $ection;


print '<form enctype="multipart/form-data" action="' . $ection . '" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
    Отправить этот файл: <input name="userfile" type="file" value="" />
    <input type="submit" value="Отправить файл" />
</form>';

?>

<?php
 $id = $_GET["id"];
 //print_r($_GET)
?>