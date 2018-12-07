<?php 
    session_start();
    include './includes/user.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="10; url=index.php">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Haba - EIC</title>
</head>
<body>
    <?php 
        include './pages/header.php';
        if(!isset($_SESSION['login']) || empty($_SESSION['login']))
        {
            include './pages/form.php';
        }
        else
        {
            include './pages/core.php';
        }
    ?>
</body>
</html>