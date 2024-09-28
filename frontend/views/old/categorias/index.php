<main>
    <h1>MENU DE CATEGORIA</h1>

    <form id="form-search" action="/frontend/views/categoria/editarCategoria.php" method="POST">
        <input type="search" placeholder="Buscar categoria">
    </form>
    <div class="div-buttons">
            <a href="/categorias/cadastro" class="button">cadastrar</a>
            <button class="button">deletar</button>
    </div>
    <label class="label-selecionar" for="">selecionar todos<input type="checkbox"></label>
    <div class="div-btns">
        <?php
        ?>
            <div class="div-div-inputs">
                <form id="form-btn" method="POST">
                    <label for="botao">
                        <input type="hidden" name='id' value=''>
                        <input type="hidden" name='id_seq' value=''>
                        <input name="botao" type='submit' class='link' value=''>
                    </label>
                </form>

                <br>
            </div>
    </div>
    <p><span style="color:red">clique</span> para atualizar ou ver sub categorias</p>
</main>