<?php
    session_start();
    include 'user.php';

    if(isset($_POST['login']) && isset($_POST['password']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        // if(get_user($login, $password))
        if(user_found($login))
        {
            connect_user($login);
            $_SESSION['login'] = $login;
            header("Location:../index.php");
        }
        else
        {
            $error = 0;
            header("Location:../index.php?error=$error");
        }
    }
    else
    {
        $error = 1;
        header("Location:../index.php?error=$error");
    }
?>