<?php
    include 'db.conf.php';
    
    function haba_user($login)
    {
        global $link;
        $query = "UPDATE haba SET haba=0";
        $result = mysqli_query($link, $query);

        $query = "UPDATE haba SET haba=1 WHERE login='".$login."'";
        $result = mysqli_query($link, $query);
    }

    function disconnect_user($login)
    {
        global $link;
        $query = "UPDATE haba SET online=0 WHERE login='".$login."'";
        $result = mysqli_query($link, $query);
    }

    function connect_user($login)
    {
        global $link;
        $query = "UPDATE haba SET online=1 WHERE login='".$login."'";
        $result = mysqli_query($link, $query);
    }
    function get_friends($login)
    {
        global $link;
        $query = "SELECT login,online,haba_num,haba from haba WHERE login!='".$login."'";
        $result = mysqli_query($link, $query);
        $users = array();
        while($user = mysqli_fetch_assoc($result))
        {
            array_push($users, $user);            
        }
        return $users; 
        mysqli_close($link);
    }
    
    function get_user($login)
    {
        global $link;
        $query = "SELECT * from haba where login='".$login."'";
        if($result = mysqli_query($link, $query))
        {
            if($user = mysqli_fetch_assoc($result))
            {
                return $user;
            }
        }
        return array(); 
        mysqli_close($link);
    }

    function user_found($login)
    {
        global $link; 

        $query = "SELECT * from haba where login='".$login."'";
        if($result = mysqli_query($link, $query))
        {
            if($user = mysqli_num_rows($result) > 0) 
            {
                return TRUE;
            }
        }
        return FALSE;
        mysqli_close($link);
    }
?>