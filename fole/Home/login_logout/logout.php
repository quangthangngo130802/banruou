<?php
    session_start();

    unset($_SESSION['ma_user']);
    unset($_SESSION['user_login']);
    unset($_SESSION['ten_user']);
    ///unset($_SESSION['cart']);
    if(!isset($_SESSION['ma_user'])){
        
        header('Location: ../../Login/Login/login.php');
    }
   

?>