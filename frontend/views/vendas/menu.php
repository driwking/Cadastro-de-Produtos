<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vendas</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <script src="javascript/index.js"></script>
    <?php echo "<style>" ?>
    <?php
    include_once $_SESSION['layouts-css'] . 'menu-topo.css'
    ?>
    <?php
    include_once $_SESSION['layouts-css'] . 'menu-lateral.css'
    ?>
    <?php echo "</style>" ?>
    <link rel="stylesheet" href="./css/menuVendas.css">

</head>

<body>

    <?php require_once $_SESSION['layouts'] . 'menu-topo.php' ?>

    <section class="body-vendas">
        <?php require_once $_SESSION['layouts'] . 'menu-lateral.php' ?>
        <section class="main-vendas">
            <h1>VENDAS</h1>

            <div class="div-botoes">
                <a href="/vendas" class="btn-1">VENDER</a>
                <a href="/HistoricoVendas" class="btn-2">HISTÓRICO DE VENDAS</a>
            </div>

        </section>
    </section>



</body>

</html>