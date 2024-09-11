<main>
    <section class="main">
        <div class="titulo">
            <h1>PIZZAS</h1>
        </div>

        <div class="card-pai">
            <?php

            require_once $_SESSION['dir'] . '\backend\connect.db.php';

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