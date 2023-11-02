<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <title><?php echo $_SESSION['title'] ?></title>
    <style>
        <?php include_once $_SESSION['layouts-css'] . 'menu-topo.css' ?>
    </style>
    <link rel="stylesheet" href="./css/">

</head>

<body>

    <?php include_once $_SESSION['layouts'] . 'menu-topo.php' ?>

</body>

</html>