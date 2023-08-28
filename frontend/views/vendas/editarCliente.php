<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" rel="width=device-width, scale=1.0">
    <title>nome do cliente</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <?php echo "<style>" ?>

    <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu-topo.css' ?>
    <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu-lateral.css' ?>

    <?php echo "</style>" ?>
    <link rel="stylesheet" href="./css/cliente.css">
</head>

<body>
    <?php require_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-topo.php' ?>
    <?php require_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-lateral.php' ?>

    <div class="div-form">
    <a class="btn-voltar" href="./menuClientes.php">< voltar</a>
    <h1>NOME DO CLIENTE</h1>
    <form class="">
        <div class="row row-1">
        NOME <input type="text">
        TELEFONE <input type="text">
        </div>
        <button class="btn btn-atualizar">atualizar</button>
        <button class="btn btn-deletar">deletar</button>
        <div class="row row-2">
        ENDEREÇO <input type="text">
        Nº<input type="number">
        </div>  
    </form>
</body>

</html>