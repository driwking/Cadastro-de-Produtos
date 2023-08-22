<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <script src="javascript/index.js"></script>
    <?php echo "<style>"?> 
        <?php 
            include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu.css'
        ?>
        <?php  
            include_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/css/menu-lateral.css'
        ?> 
    <?php echo "</style>"?>
    
    
</head>
<body>

<?php require_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-topo.php';?>

<?php require_once '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-lateral.php';?>

<section class="sec-conteudo">
    <h1>VENDAS</h1>
    <h2>CLIENTE</h2>
    
    <div class='div-formulario'>
    <form>
        <label>Buscar por cliente:</label><input type="search">
        <label>Nome:</label><input type="text">
        <label>Endereço:</label><input type="text"><label>Nº</label><input type="number">
        <label>Telefone:</label><input type="text">
    </form>
    </div>

    <h2>PEDIDO</h2>
    
    <div class='div-formulario2'>
    <form>
        <div class="linha-1">
        <div class="titulo-input">
            <label>Tamnaho Pizza</label>
            <select name="TamnhoPizza" id="piz">
                <option value=""></option>
                <option value="Broto">Broto</option>
                <option value="Grande">Grande</option>
                <option value="Big">Big</option>
            </select>
        </div>
        <div class="titulo-input">
        <label>Quantidade de sabores</label>
        <select name="QuantidadeSabores" id="piz">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        </div>
        <div class="titulo-input">
        <label>Sabores</label>
        <select name="Sabores" id="piz">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        </div>
        </div>
        
        <div class="linha-2">
        <div class="titulo-input">
            <label>Adicionais</label>
            <select name="Adicionais" id="piz">
                <option value=""></option>
                <option value="Broto">Bebidas</option>
                <option value="Grande">Bordas</option>
                <option value="Big">Molhos</option>
            </select>
        </div>
        <div class="titulo-input">  
        <label>Desconto</label><input type="text">
        </div>
        </div>
   
 <div class="card-ntf">
    <div class="nota-fiscal">
        <div class="ntf-titulo">
            <p>icon</p>
            <h1>NOTA FISCAL</h1>
        </div>

        <div class="ntf-conteudo">
        
        </div>
    </div>
    </div>
    </div>
    </form>
    <button class="botao" type="submit">VENDER</button>
</section>
</section>
</main>



</body>
</html>
