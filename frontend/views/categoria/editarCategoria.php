<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <title>Editar categoria</title>
    <style>
        <?php include_once $_SESSION['layouts-css'] . 'menu-topo.css' ?>
    </style>
    <link rel="stylesheet" href="./css/editar.css">
</head>

<body>

    <?php require_once $_SESSION['layouts'] . 'menu-topo.php' ?>
    <h1>EDITAR CATEGORIA</h1>
    <form action="">
        <h2>PRINCIPAL</h2>
        <input type="text" id="input-1" placeholder="tasf">
        <div class="div-buttons">
            <a class="button btn-1" href="/categorias">voltar ao menu</a>
            <button class="button btn-2">atualizar</button>
        </div>
        <div class="div-titulos">
            <h2>SEGUNDARIAS</h2>
            <h2>TAMANHOS</h2>
            <h2>VALORES</h2>
        </div>
        <div class="div-inputs">

            <input type="text" placeholder="testeetst">
            <input type="text" placeholder="testeetst">
            <input type="text" placeholder="testeetst">

        </div>
        <button class="button btn-3">novo</button>
        <h3><span style="color:red">clique</span> para atualizar ou deletar</h3>
    </form>
</body>

</html>