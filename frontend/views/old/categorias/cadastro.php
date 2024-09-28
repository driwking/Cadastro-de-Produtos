<?php
load_js( FRONT_S . "/controller/js/index");
load_js( VIEWS_S . "/categorias/js/add_cart");
load_js( VIEWS_S . "/categorias/js/index");
?>

<main>
    <h1>CADASTRO DE CATEGORIA</h1>
    <form method="POST">

        <div class="categoria-principal">
            <label for="">CATEGORIA PRINCIPAL</label>
            <input type="text" placeholder="TRADICIONAL" name="categoria" id="categoria">
        </div>
        <div class="categoria-segundaria">
            <div class="menu-categorias" id="cart-1">
                <div class="sub-segundaria" id="sub-seg">
                    <div class="secao-segundaria">
                        <label class="label-segundaria" for="">CATEGORIA SEGUNDARIA</label>
                        <input class="input-segundaria" type="text" placeholder="SALGADA" name="sub_categoria" id="sub_categoria">
                        <div class="btn_add_cart btn-segundario btn-add-cart"><img src="/frontend/public/img/mais.png" alt=""></div>
                    </div>
                    <div class="detalhes-segundaria">
                        <div class="detalhes-titles">
                            <h3>TAMANHO DAS PIZZAS</h3>
                            <h3>VALOR</h3>
                        </div>
                        <div class="btn-segundario add_line"><img src="/frontend/public/img/mais.png" alt=""></div>
                        <div class="detalhes-inputs" id="div-line">
                            <input type="text" name="tamanho" label="tamanho_valor" placeholder="UNICO" id="tamanho">
                            <input type="text" name="valor" label="tamanho_valor" placeholder="R$" id="valor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-button">
            <a class="button" href="/categorias">voltar</a>
            <button class="button">cadastrar</button>
        </div>
    </form>
</main>