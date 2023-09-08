<?php session_start() ?>
<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' href='/frontend/public/img/logo.png' type="image/x-icon">
    <title>Pizzas</title>
    <style>
        <?php include_once $_SESSION['dir'] . '/frontend/layouts/css/menu-topo.css' ?>
    </style>
    <link rel='stylesheet' href="./css/cardapio.css">
</head>

<body>

    <?php require_once $_SESSION['dir'] . '/frontend/layouts/menu-topo.php' ?>

    <div class="banner">
        <img src="/frontend/public//img/Pizza_PNG_Transparente_Grande_Fatias_Sem_Fundo 2.png" alt="">
    </div>
    <section class="section-body">
        <div class="bar-lateral-cardapio">
            <h1><i>*</i>CARDAPIO<i>*</i></h1>
            <ul class="ul ul-1">
                <a class="ul-title" href="">
                    <i>*</i> TRADICIONAIS
                </a>
                <li><a href="">
                        <p>Salgada</p>
                    </a></li>
                <li><a href="">Doce</a></li>
            </ul>
            <ul class="ul ul-2">
                <a class="ul-title" href="">
                    <i>*</i> ESPECIAIS
                </a>
                <li><a href="">Salgada</a></li>
                <li><a href="">Doce</a></li>
            </ul>
            <ul class="ul ul-3">
                <a class="ul-title" href="">
                    <i>*</i> MEGA ESPECIAIS
                </a>
                <li><a href="">Salgada</a></li>
            </ul>
        </div>

        <section class="section-cardapio-conteudo">
            <form>
                <input type="search" placeholder="Buscar pizza">
            </form>


            <div class="conteudo-cardapio">
                <h1>TRADICIONAIS</h1>
                <div>
                    <h2>Salgada</h2>
                    <div class="div-pizzas">
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                    </div>
                    <div>
                    <h2>Salgada</h2>
                    <div class="div-pizzas">
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="/frontend/public/img/pizza_1441666 1.png" alt=""></div>
                            <p>nome da pizza</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
</body>

</html>