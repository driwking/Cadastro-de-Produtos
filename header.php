<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <title><?php echo $_SESSION['title'] ?></title>
    <style>
        <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-topo.php' ?>
    </style>
    <link rel="stylesheet" href="./css/">

</head>

<body>

    <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-topo.php' ?>

</body>

</html>