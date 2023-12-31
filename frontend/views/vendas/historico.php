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
    include_once $_SESSION['layouts-css'] . 'menu-topo.css'
    ?>
    <?php
    include_once $_SESSION['layouts-css'] . 'menu-lateral.css'
    ?>
    <?php echo "</style>" ?>
    <link rel="stylesheet" href="./css/historico.css">

</head>

<body>

    <?php require_once $_SESSION['layouts'] . 'menu-topo.php' ?>


    <section class="body-historico-vendas">
        <?php require_once $_SESSION['layouts'] . 'menu-lateral.php' ?>
        <section class="main-historico">
            <section class="topo-historico">
                <div class="div-topo">
                    <h1>TODAS AS VENDAS</h1>
                    <button class="btn-topo">
                        <i></i>
                        <p>FILTRO</p>
                    </button>
                </div>


            </section>

            <section class="conteudo">
                <div class="historico-titulo">
                    <h2>CÓDIGO</h2>
                    <h2>CLIENTE</h2>
                    <h2>VALOR</h2>
                    <h2>DATA</h2>
                </div>
                <div class="container-div">
                    <div class="div-conteudo">
                        <a href="/historico-cliente" class="link-cliente">
                            <h3>#001</h3>
                            <h3>Marcia Rodrigues Paula</h3>
                            <h3>R$ 34,90</h3>
                            <h3>22:30 - 12/02/23</h3>
                        </a>
                    </div>
                    <div class="border-bot">

                    </div>

                </div>
                <div class="container-div">
                    <div class="div-conteudo">
                        <a href="/historico-cliente" class="link-cliente">
                            <h3>#001</h3>
                            <h3>Marcia Rodrigues Paula</h3>
                            <h3>R$ 34,90</h3>
                            <h3>22:30 - 12/02/23</h3>
                        </a>
                    </div>
                    <div class="border-bot">

                    </div>

                </div>
            </section>
        </section>
    </section>



</body>

</html>