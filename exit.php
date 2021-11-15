<?php
    session_start();
    if (isset($_POST['exit'])){
        unset($_SESSION['user_id']);
        header('Location:index.php');
    }
?>