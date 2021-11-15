<?php
if(isset($_POST['ok_go'])) {
$text = $_POST['text'];
$first_var = trim($text); 
if(empty($text)) echo 'Пусто!'; 
else {
echo 'Вы ввели: <b>', $text, '</b>';
}
}
?>

<?php
$servername = "localhost";
$database = "yagodka";
$username = "yagodka";
$password = "yagodka000";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<?php
$sql = "INSERT INTO test (text) VALUES ($text)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

