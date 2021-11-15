<?php
    $uploaddir = 'img/';
    //print_r($_POST);
    $id = $_GET["id"];
    //echo $id;
    //echo $id;
    //echo $uploaddir;
    //$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    //echo $uploadfile;

    echo '<pre>';
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "Файл корректен и был успешно загружен.\n";
    }   else {
            echo "Возможная атака с помощью файловой загрузки!\n";
    }
    
        echo 'Некоторая отладочная информация:';
        print_r($_FILES);
    
        print "</pre>";
?>

<?php
    include('db_connection.php');
    $sql = mysqli_query($connection, "INSERT INTO `images` (`path`, `productid`) VALUES ('$uploadfile', '$id')");
?>