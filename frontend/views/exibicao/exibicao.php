<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Jacintho's</title>
    <meta name="author" content="andriw aparecido">
    <meta name="keywords" content="exibição, pizza, menu, categoria">
    <meta name="descrition" content="pagina de exibição das pizzas">
    <link rel="stylesheet" href="css/exib-style.css">
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <?php echo '<style>' ?>
    <?php include_once $_SESSION['dir'] . '/frontend/layouts/css/menu-topo.css'  ?>
    <?php echo '</style>' ?>

</head>

<body>

    <?php include_once $_SESSION['dir'] . '/frontend/layouts/menu-topo.php' ?>

    <main>
        <section class="main">
            <div class="titulo">
                <h1>PIZZAS</h1>
            </div>

            <div class="card-pai">
                <?php

                require_once $_SESSION['dir'].'\backend\connect.db.php';

                $sql = "SELECT * FROM pizzas";
                $result = mysqli_query($connect, $sql);
                // $contents='BINARY IMAGE DATA';



                if (mysqli_num_rows($result) > 0) {

                    while ($dados = mysqli_fetch_array($result)) :

                ?>
                        <div class="card">
                            <div class="sub-card"><?php echo '<img class="img" src="data:image/png;base64,' . base64_encode($dados['imagem']) . '" alt=""/>' ?><div class="descricao"><span class="span"><?php
                                                                                                                                                                                                        echo $dados['descricao'] ?>
                                    </span></div>
                            </div>
                        </div>

                <?php
                    endwhile;
                }

                ?>
            </div>
            <!-- <div class="card-pai">
            <div class="card">
                <div class="sub-card"><img class="img" src="../front-end/imagens/frango.jpg" alt=""><div class="descricao"></div><span class="span">CHOCOLATE
                    CREME DE LEITE, MUÇARELA, CHOCOLATE PRETO RALADO E LEITE CONDESADO.
                    </span></div>
            </div>
            <div class="card">
                <div class="sub-card"><img class="img" src="../front-end/imagens/doce.jpg" alt=""><div class="descricao"></div><span class="span">CHOCOLATE
                    CREME DE LEITE, MUÇARELA, CHOCOLATE PRETO RALADO E LEITE CONDESADO.
                    </span></div>
            </div>
            <div class="card">
                <div class="sub-card"><img class="img" src="../front-end/imagens/calabresa.jpg" alt=""><div class="descricao"></div><span class="span">CHOCOLATE
                    CREME DE LEITE, MUÇARELA, CHOCOLATE PRETO RALADO E LEITE CONDESADO.
                    </span></div>
            </div>
            </div> -->
        </section>

    </main>
</body>

</html>