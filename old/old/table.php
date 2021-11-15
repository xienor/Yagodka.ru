<form method="POST" action="">
<input type="text" name="name" placeholder="Name"/>
<input type="text" name="color" placeholder="color"/>
<input type="text" name="razmer" placeholder="razmer"/>
<input type="submit" name="Enter" value="Enter" />
</form>

<?php
if(isset($_POST['Enter'])) {
    $name = $_POST['name'];
    $color = $_POST['color'];
    $razmer = $_POST['razmer'];
    echo 'Имя: <b>' , $name, '</b>' , '<br/>';
    echo 'Цвет: <b>' , $color,  '</b>' , '<br/>';
    echo 'Размер: <b>' , $razmer, '</b>', '<br/>';

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
        echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}


?>