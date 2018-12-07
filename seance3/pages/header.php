<?php
    $state = FALSE;
    if(!isset($_SESSION['login']) || empty($_SESSION['login']))
    {
        $avatar = 'img/logo.png';
    }
    else
    {
        $state = TRUE;
        $login = $_SESSION['login'];

        $user = get_user($login);
    }
?>
<nav class="nav">
    <div id="logo"><img src="
    <?php 
        echo $state ? $user['avatar'] : $avatar;
    ?>
    " alt="Haba"></div>
    <ul>
        <li><h4>
            <?php 
                echo (!$state ? 'Hello' : $user['login']);
            ?>
        </h4></li>
        <li>
            <?php 
                echo (!$state ? '' : '<a href="./includes/logout.php">Logout</a>');
            ?>
        </li>
    </ul>
</nav>