<?php
    include '../includes/user.php';
    if(isset($_GET['user']))
    {
        $user = $_GET['user'];
        haba_user($user);
        header("Location:../index.php");
    }
?>