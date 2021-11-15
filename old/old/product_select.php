<?php
    include('db_connection.php');
    $sql = "SELECT * FROM `products`";
    $uploaddir = 'img/';
    $products = mysqli_query($connection, $sql);
    //print_r($sql);
    print '<table border="1">';
    while($row = $products->fetch_assoc()){
        print '<tr>';
        print '<td>' . $row["id"] . '</td>';
        print '<td>' . $row["name"] .'</td>';
        print '<td>' . $row["color"] . '</td>';
        print '<td>' . $row["razmer"] . '</td>';
        $url = http_build_query($row);
        //print '<td>' . '<a href = ' . $url1 . '> . </td>';
        print '<td>' . '<form action = "upload2.php?' . $url . '" method="POST"> <input type="submit" name="Enter" value="Загрузить картинку"/> </form> ' . '</td>';
        print '<td>' . '<form action = "pages/product.php?' . $url . '" method="POST"> <input type="submit" name="Enter" value="Просмотреть"/> </form> ' . '</td>';
        print '<td>' . '<form action = "product_remove.php?' . $url . '" method="POST"> <input type="submit" name="Enter" value="Удалить товар"/> </form> ' . '</td>';
        print '</tr>';
    } 
    print '</table>';
?>