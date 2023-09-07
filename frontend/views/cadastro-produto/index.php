<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <?php echo "<style>" ?>
    <?php include_once $_SESSION['dir'].'/frontend/layouts/css/menu-topo.css' ?>
    <?php echo "</style>" ?>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php require_once $_SESSION['dir'].'/frontend/layouts/menu-topo.php' ?>
    <h1>CONHEÇA SEUS PRODUTOS</h1>
    <div class="produtos-main">
        <ul >
            <li class="li-list"><a href="/categorias">categorias</a></li>
            <li class="li-list"><a href="/pizzas">pizzas</a></li>
            <li class="li-list"><a href="/adicionais">adicionais</a></li>
        </ul>
        <div class="card-img">
            <img src="/frontend/public/img/Pizza_PNG_Transparente_Grande_Fatias_Sem_Fundo 2.png" alt="pizza">
        </div>
        <!-- <div class="div-sobra">
        <p>asdsad</p>
        </div> -->

    </div>
</body>

</html>