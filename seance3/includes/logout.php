<?php
    include 'user.php';
    session_start();
    $login = $_SESSION['login'];
    disconnect_user($login);
    session_destroy();
    header("Location:../index.php");
?>