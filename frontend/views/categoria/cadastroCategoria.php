<?php session_start() ?>
<!DOCTYPE HTML>
<html lang='pt-br'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre a categoria</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <style>
        <?php include_once $_SESSION['layouts-css'] . 'menu-topo.css' ?>
    </style>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<body>
    <?php require_once $_SESSION['layouts'] . 'menu-topo.php' ?>
    <h1>CADASTRO DE CATEGORIA</h1>
    <form action="/backend/models/cadastro-pizza/index.php" method="POST">

        <div class="categoria-principal">
            <label for="">CATEGORIA PRINCIPAL</label>
            <input type="text" placeholder="TRADICIONAL" name="0">
        </div>
        <div class="categoria-segundaria">
            <label for="">CATEGORIA SEGUNDARIA</label>
            <div class="btn-segundario btn-add-cart"><img src="/frontend/public/img/mais.png" alt=""></div>
            <div class="sub-segundaria" id="sub-seg">
                <input type="text" placeholder="SALGADA" name="1" id="input_segundaria">
                <!-- <input type="text" placeholder="DOCE" name="2"> -->
                <div class="detalhes-segundaria">
                    <div class="detalhes-titles">
                        <h3>TAMANHO DAS PIZZAS</h3>
                        <h3>VALOR</h3>
                    </div>
                    <div class="detalhes-inputs" id="div-line">
                        <input type="text" name="tamanho-1" placeholder="UNICO" id="line-01">
                        <input type="text" name="tamanho-2" placeholder="R$" id="line-02">
                    </div>
                    <div class="btn-segundario add_line"><img src="/frontend/public/img/mais.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="form-button">
            <a class="button" href="/categorias">voltar</a>
            <button class="button">cadastrar</button>
        </div>
    </form>
    <script src="js/add_cart.js"></script>
</body>