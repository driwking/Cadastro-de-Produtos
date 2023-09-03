<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <style>
        <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu-topo.css' ?>
    </style>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php require_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-topo.php' ?>

    <h1>MENU DE CATEGORIA</h1>

    <form action="">
        <input type="search" placeholder="Buscar categoria">
        <div class="div-buttons">
            <a href="/cadastro/categoria" class="button">cadastrar</a>
            <button class="button">deletar</button>
        </div>
        <label class="label-selecionar" for="">selectionar todos<input type="checkbox"></label>
        <div class="div-div-inputs">
            <div class="div-inputs">
                <input type="checkbox">
               <label for=""><a href="/editar-categoria">NOME</a></label>
            </div>
            <div class="div-inputs">
                <input type="checkbox">
                <label for=""><a href="/editar-categoria">NOME</a></label>
            </div>
            <div class="div-inputs">
                <input type="checkbox">
                <label for=""><a href="/editar-categoria">NOME</a></label>
            </div>
            <div class="div-inputs">
                <input type="checkbox">
                <label for=""><a href="/editar-categoria">NOME</a></label>
            </div>

        </div>
    </form>

    <p><span style="color:red">clique</span> para atualizar ou ver sub categorias</p>
</body>

</html>