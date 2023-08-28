<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>clientes</title>
        <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
        <?php echo '<style>' ?>
            <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu-topo.css'?>
            <?php include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu-lateral.css'?>

        <?php echo '</style>' ?>

        <link rel="stylesheet" href="./css/menuClientes.css">
    </head>
    <body>
        <!-- menus -->
        <?php require_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-topo.php'?>
        <?php require_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-lateral.php'?>
        <section class="main">
            <h1>CLIENTES</h1>
            <form action="" class="search-client">
                <input type="search" placeholder="Buscar clientes">
            </form>
            <div class="div-buttons">
                <a href="./cadastroCliente.php">Cadastrar</a>
                <a href="">Deletar 🗑</a>
            </div>

            <div class="div-checkbox-selecionar">
                <label for="selecionar">selecionar todos</label>
                <input type="checkbox" name="selecionar" id="selecionar">   
            </div>

            <form class="form-list-client">
                <ul class="list-client">
                    <input type="checkbox">
                    <div class="client">
                        <li>👩‍🍳 Julia Marques</li>
                        <li>📞(41) 1234-56789 </li>
                    </div>
                    <a href="./editarCliente.php" class="button">ver contato</a>
                </ul>
                
            </form>
        </section>
    </body>
</html>