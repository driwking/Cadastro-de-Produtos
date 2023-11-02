<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vendas 20/10/2023</title>
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <script src="javascript/index.js"></script>
    <?php echo "<style>" ?>
    <?php
    include_once $_SESSION['layouts-css'] . 'menu-topo.css'
    ?>
    <?php
    include_once $_SESSION['layouts-css'] . 'menu-lateral.css'
    ?>
    <?php echo "</style>" ?>
    <link rel="stylesheet" href="./css/pageVenda.css">

</head>

<body>

    <?php require_once $_SESSION['layouts'] . 'menu-topo.php' ?>


    <section class="body-vendas-nota">
        <?php require_once $_SESSION['layouts'].'menu-lateral.php' ?>
        <section class="main-historico">
            <section class="topo-historico">
                <div class="div-topo">
                    <h1>#001</h1>
                </div>


            </section>

            <section class="conteudo">
                <div class="historico-titulo">
                    <h2>CLIENTE</h2>
                    <h2>VALOR TOTAL</h2>
                    <h2>DATA</h2>
                </div>
                <div class="container-div">
                    <div class="div-conteudo">
                        <h3>Marcia Rodrigues Paula</h3>
                        <h3>R$ 34,90</h3>
                        <h3>22:30 - 12/02/23</h3>
                    </div>
                </div>

                </div>
                <h2 class="titulo-pedido">PEDIDO</h2>
                <div class="div-pedido">
                    <ul>
                        <li class="pedido-titulo">
                            <h3>1 pizza grande</h3>
                            <h3> DESCRIÇÃO</h3>
                            <h3> VALOR</h3>
                        </li>
                        <li class="pedido-conteudo">
                            <h4>3 SABORES</h3>
                                <p>-</p>
                                <ul class="lista-descricao">
                                    <li>4 queijos</li>
                                    <li>muçarela</li>
                                    <li>calabresa</li>
                                </ul>
                                <p>-</p>
                                <h4>R$ 34,90</h4>
                        </li>
                        <li class="pedido-conteudo">
                            <h4>3 SABORES</h3>
                                <p>-</p>
                                <ul class="lista-descricao">
                                    <li>4 queijos</li>
                                    <li>muçarela</li>
                                    <li>calabresa</li>
                                </ul>
                                <p>-</p>
                                <h4>R$ 34,90</h4>
                        </li>
                    </ul>

                </div>
            </section>
        </section>
    </section>



</body>

</html>