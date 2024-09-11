<main>
    <h1>CADASTRO DE CATEGORIA</h1>
    <form action="/backend/models/cadastro-pizza/index.php" method="POST">

        <div class="categoria-principal">
            <label for="">CATEGORIA PRINCIPAL</label>
            <input type="text" placeholder="TRADICIONAL" name="nomeCategoriaPrincipal">
        </div>
        <div class="categoria-segundaria">
            <div class="menu-categorias">
                <div class="sub-segundaria" id="sub-seg">
                    <div class="secao-segundaria">
                        <label class="label-segundaria" for="">CATEGORIA SEGUNDARIA</label>
                        <input class="input-segundaria" type="text" placeholder="SALGADA" name="nomeCategoriaSegundaria-01" id="input_segundaria">
                        <div class="btn_add_cart btn-segundario btn-add-cart"><img src="/frontend/public/img/mais.png" alt=""></div>
                    </div>
                    <div class="detalhes-segundaria">
                        <div class="detalhes-titles">
                            <h3>TAMANHO DAS PIZZAS</h3>
                            <h3>VALOR</h3>
                        </div>
                        <div class="btn-segundario add_line"><img src="/frontend/public/img/mais.png" alt=""></div>
                        <div class="detalhes-inputs" id="div-line">
                            <input type="text" name="sub-01-tamanho-01" placeholder="UNICO" id="line-01">
                            <input type="text" name="sub-01-valor-01" placeholder="R$" id="line-02">
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
    <script src="js/add_cart.js"></script>
</main>