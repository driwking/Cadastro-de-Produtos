<?php session_start();

require_once $_SESSION['crud'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <style>
        <?php include_once $_SESSION['layouts-css'] . 'menu-topo.css' ?>
    </style>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php require_once $_SESSION['layouts'] . 'menu-topo.php' ?>

    <h1>MENU DE CATEGORIA</h1>

    <form id="form-search" action="/frontend/views/categoria/editarCategoria.php" method="POST">
        <input type="search" placeholder="Buscar categoria">
    </form>
    <div class="div-buttons">
        <form id="form-cad" action="/frontend/views/categoria/editarCategoria.php" method="POST">
            <a href="/categorias/cadastro" class="button">cadastrar</a>
        </form>
        <form id="form-del" action="/frontend/views/categoria/editarCategoria.php" method="POST">
            <button class="button">deletar</button>
        </form>
    </div>

    <label class="label-selecionar" for="">selecionar todos<input type="checkbox"></label>
    <div class="div-btns">
        <?php
        for ($i = 1; $i < count_register(); $i++) {

        ?>
            <div class="div-div-inputs">

                <!-- <input type="checkbox" name='id' value='<?php echo $i ?>'> -->
                <form id="form-btn" action="/frontend/views/categoria/editarCategoria.php" method="POST">
                    <label for="botao">
                        <input type="hidden" name='id<?php echo $i ?>' value='<?php echo id($i) ?>'>
                        <input name="botao" type='submit' class='link' value='<?php read() ?>'>
                    </label>
                </form>

                <br>
            </div>
        <?php }; ?>
    </div>
    <p><span style="color:red">clique</span> para atualizar ou ver sub categorias</p>
</body>

</html>