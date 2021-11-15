<?php
if(isset($_POST['ok_go'])) {
$result = $_POST['result'];
$result = trim($result); 
if(empty($result)) echo 'Пусто!'; 
else {
echo 'Вы ввели: <b>', $result, '</b>';
}
}
?>

