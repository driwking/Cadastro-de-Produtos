<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vendas</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <script src="javascript/index.js"></script>
    <?php echo "<style>" ?>
    <?php
    include_once $_SESSION['dir'] . '/frontend/layouts/css/menu-topo.css'
    ?>
    <?php
    include_once $_SESSION['dir'] . '/frontend/layouts/css/menu-lateral.css'
    ?>
    <?php echo "</style>" ?>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <?php require_once $_SESSION['dir'] . '/frontend/layouts/menu-topo.php'; ?>

    <section class="body-index-vendas">
        <?php require_once $_SESSION['dir'] . '/frontend/layouts/menu-lateral.php'; ?>
    <section class="sec-conteudo">

        <h1>VENDAS</h1>
        <h2 id="titulo-cliente">CLIENTE</h2>

        <form action="">

            <div class="div-cliente">
                <input type="search">
                <select name="" id="">
                    <option value="">teste</option>
                    <option value="">sddsads</option>
                    <option value="">gfgfgf</option>
                </select>
                <p>ou</p>
                <a href="" class="btn btn-cadastre">CADASTRE</a>
            </div>

            <h2 id="titulo-pedido">PEDIDO</h2>
            <div class="qtd-pizzas">
                <label for="" class="label-pizzas">pizzas</label>
                <input type="number" id="input-qtd-pizzas" placeholder="0">
            </div>

            <div class="div-pizzas">

                <h2>1° PIZZA</h2>

                <div class="div-tamanho-qtd">
                    <select class="label-tamanho">
                        <option value="">Tamanho</option>
                    </select>
                    <input type="number"  placeholder="Quantidade de sabores">
                </div>
                <div class="div-sabores">
                    <select name="" id="">
                        <option value="">Sabores 1</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="">Sabores 2</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="">Sabores 3</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="input-adicionais">
                    <label for="">Adicionais</label>
                    <input type="text" placeholder="Quantidade">
                </div>
                <div class="div-adicionais">
                    <select name="" id="">
                        <option value="">Adicional 1</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="">Adicional 2</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="">Adicional 3</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="div-pizzas">
                <h2>1° PIZZA</h2>
                <div class="div-tamanho-qtd">
                    <input type="text" placeholder="Tamanho">
                    <input type="number" placeholder="Quantidade de sabores">
                </div>
                <div class="div-sabores">
                    <select name="" id="">
                        <option value="">Sabores 1</option>
                    </select>
                    <select name="" id="">
                        <option value="">Sabores 2</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="">Sabores 3</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="input-adicionais">
                    <label for="">Adicionais</label>
                    <input type="text" placeholder="texto">
                </div>
                <div class="div-adicionais">
                    <select name="" id="">
                        <option value="">Adicional 1</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="">Adicional 2</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="">Adicional 3</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="nota-fiscal">

                <div class="nota-titulo">
                    <h1>Nota fiscal</h1>
                </div>
                <div class="nota-conteudo">

                </div>
            </div>

            <div class="div-desconto">

                <label for="">Desconto R$:</label>
                <input type="text">
                <label for="">Entrega ou retirada</label>
                <select name="" id="">
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <label for="">Taxa</label>
                <input type="text">

            </div>
            <div class="div-botoes">

                <button>Vender</button>
                <button>Cancelar</button>

            </div>
        </form>
    </section>
    </section>



</body>

</html>