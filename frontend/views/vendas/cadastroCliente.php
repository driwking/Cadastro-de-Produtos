<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastre um cliente</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <?php echo "<style>"?>
        <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu-topo.css' ?>
        <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu-lateral.css' ?>
    <?php echo "</style>"?>
    <link rel="stylesheet" href="./css/cliente.css">
</head>
<body>

    <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-topo.php' ?>
    <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-lateral.php' ?>

    <div class="div-form">
    <a class="btn-voltar" href="./menuClientes.php">< voltar</a>
    <h1>CADASTRAR CLIENTE</h1>
    <form class="">
        <div class="row row-1">
        <label>NOME</label> <input type="text">
        <label>TELEFONE</label><input type="text">
        </div>
        <button>cadastrar</button>
        <div class="row row-2">
        <label>ENDEREÇO</label><input type="text">
        <label>Nº</label><input type="number">
        </div>  
    </form>
</body>
</html>


