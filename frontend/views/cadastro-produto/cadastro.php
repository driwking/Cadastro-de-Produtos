<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Jacintho's</title>
    <meta name="author" content="andriw aparecido">
    <meta name="keywords" content="cadastro, pizza">
    <meta name="descrition" content="pagina para cadastro de pizzas">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../componentes/logo.png" type="image/x-icon">
</head>
<body>
<?php require '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/layouts/menu-topo.php'; ?>

<main>

    <section class="body-conteudo">

        <section class="formulario">

            <h1>CADASTRO DE PIZZAS</h1>

            <form action="\php\Cadastro-de-Produtos\php-action\post.php" class="formula" method="POST" enctype="multipart/form-data">
                <div class="parte-1">

                    <div class="input-file">
                        <input type="file"  class="input-file-custom" id="input-file" name="imagem">
                        <label for="input-file" class="arquivo" tabindex="5"><span class="test">inserir imagem</span><img id="image" src=""></label>
                        
                       
                    
                    </div>
                    
                    <div class="parte-2">
                        <div class="form input-div" >
                            <label> Nome </label>
                            <input type="text" class="input input-nome" name="nome"  placeholder="4 queijos" autocomplete="off" tabindex="1">
                        </div>
                        
                        <div class="form input-categoria">
                            <label>Categoria</label>
                            <select class="input input-nome"  name="categoria" tabindex="2">
                                <option value="---">-</option>
                                <option class="input input-nome" value="salgada">salgada</option>
                                <option class="input input-nome" value="doce">doce</option>
                            </select> 
                        </div>

                    </div>

                </div>
                <div class="parte-3">
                    <div class="form">
                        <label>Valor de venda</label>
                        <span class="cifrao">R$</span><input type="number"class=" input input-valor" name="venda" step=".01"  placeholder="100.00" tabindex="3">
                    </div>
                    <div class="form">
                        <label>Valor de custo</label>
                        <span class="cifrao">R$</span><input type="number"class="input input-valor" name="custo" step=".01"  placeholder="100.00" tabindex="4   ">
                    </div>
                </div>

                    <div class="form input-descricao" >
                        <label>Descrição</label>
                        <textarea type="text" class="descricao"  placeholder="text" cols="1" rows="1" name="descricao" tabindex="6"></textarea>

                    </div>
                    
                <div class="input-botao">
                <button name="btn-enviar" type="submit" class="botao" tabindex="7"> Enviar</button>
                </div>

            </form>
            

        </section>


    </section>
    

</main>
<script src="javascript/index.js"></script>
</body>
</html>
