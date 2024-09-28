<main>
    <section class="banner">
        <div class="filter"></div>
        <div class="conteudo-1200">
            <div class="conteudo">
                <div class="titulo-pd">
                    <h1>Transformamos seus desejos <span>em conforto</span</h1>
                </div>
                <div class="texto">
                    <p>Colocamos todas as suas expectativas em eventos atrativos e bem elaborados, criando um espaço único para o entretenimento de sua escolha.</p>
                </div>
                <div class="btn">
                    <a href="<?= HOME . "/sobre" ?>" class="link">
                        <p>Saiba Mais</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
    component("cards");
    component("brefing");
    component("patrocinadores");
    component("sobre");
    ?>
</main>