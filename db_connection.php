<?php
    $connection = mysqli_connect('localhost', 'yagodka', 'yagodka000', 'yagodka');
    if($connection == false){
        echo 'Не удалось подключиться к базе данных';
        echo mysqli_connect_error();
        exit();
    } else {
        //echo 'Подключение установлено';
    }
?>