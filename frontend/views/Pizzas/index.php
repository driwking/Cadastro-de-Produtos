<?php session_start()?>
<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' href='/frontend/public/img/logo.png' type="image/x-icon">
    <title>Pizzas</title>
    <style>
        <?php include_once $_SESSION['dir'].'/frontend/layouts/css/menu-topo.css' ?>
    </style>
    <link rel='stylesheet' href="./css/cardapio.css">
</head>
<?php require_once $_SESSION['dir'].'/frontend/layouts/menu-topo.php' ?>

<div class="bar-lateral-cardapio">
    <h1>CADAPIO</h1>
    <ul class="ul-1"> <a href=""><p>TRADICIONAIS</p></a>
        <li><a href=""><p>Salgada</p></a></li>
        <li><a href="">Doce</a></li>
    </ul>
    <ul class="ul-2"> <a href=""><p>ESPECIAIS</p></a>
        <li><a href="">Salgada</a></li>
        <li><a href="">Doce</a></li>
    </ul>
    <ul class="ul-3"> <a href=""><p>MEGA ESPECIAIS</p></a>
        <li><a href="">Salgada</a></li>
    </ul>
</div>

</html>