<?php session_start()?>
<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre a categoria</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <style>
        <?php include_once $_SESSION['dir'].'/frontend/layouts/css/menu-topo.css' ?>
    </style>
    <link rel="stylesheet" href="./css/cadastro.css">

</head>

<body>
    <?php require_once $_SESSION['dir'].'/frontend/layouts/menu-topo.php' ?>

    <h1>CADASTRO DE CATEGORIA</h1>
    <form action="">

        <select id="lista">
            <option value="teste">teste</option>
        </select>
        <div class="categoria-principal">
            <label for="">CATEGORIA PRINCIPAL</label>
            <input type="text" placeholder="TRADICIONAL">
        </div>
        <div class="categoria-segundaria">
            <label for="">CATEGORIA SEGUNDARIA</label>
            <input type="text" placeholder="SALGADA">
            <input type="text" placeholder="DOCE">
        </div>
        <div class="div-tamanho">
            <label for="">TAMANHO DAS PIZZAS</label>
            <input type="text" placeholder="broto">
            <input type="number">
        </div>
            <div class="form-button">
                <a class="button" href="/categorias">voltar</a>
                <button class="button">cadastrar</button>
            </div>
        </form>
</body>