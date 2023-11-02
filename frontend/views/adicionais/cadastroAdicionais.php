<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <title>Cadastro adicional</title>
    <style>
        <?php include_once $_SESSION['layouts-css'] . 'menu-topo.css' ?>
    </style>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<body>
    <?php require_once $_SESSION['layouts'] . 'menu-topo.php' ?>

    <h1>CADASTRO DE ADICIONAL</h1>

    <form action="">
        <div class="div-inputs-1">
            <label for="">NOME<input type="text" placeholder="XXXXXXX"></label>
            <label for="">ITEMS<input type="text" placeholder="QUANTIDADE"></label>
        </div>
        <div class="div-inputs-2">
            <label for="">TAMANHOS<input type="text" placeholder="UNICO"></label>
            <label for="">VALORES<input type="text" placeholder="R$"></label>
            <label for="">NOME ITEM<input type="text" placeholder="XXXXXXX"></label>
        </div>

        <div class="div-buttons">
            <a href="/adicionais" class="btn-1">voltar ao cardapio</a>
            <button class="btn-2">cadastrar</button>
        </div>
    </form>

</body>

</html>