<?php
if(isset($_POST['Enter'])) {
    $name = $_POST['name'];
    $color = $_POST['color'];
    $razmer = $_POST['razmer'];
    //echo 'Имя: <b>' , $name, '</b>' , '<br/>';
    //echo 'Цвет: <b>' , $color,  '</b>' , '<br/>';
    //echo 'Размер: <b>' , $razmer, '</b>', '<br/>';

    $servername = "localhost";
    $database = "yagodka";
    $username = "yagodka";
    $password = "yagodka000";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO products (name, color, razmer)
    VALUES ('$name', '$color', '$razmer')";

    if (mysqli_query($conn, $sql)) {
        header('Location:product_select.php');

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>