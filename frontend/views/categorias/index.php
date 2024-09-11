<main>
    <h1>MENU DE CATEGORIA</h1>

    <form id="form-search" action="/frontend/views/categoria/editarCategoria.php" method="POST">
        <input type="search" placeholder="Buscar categoria">
    </form>
    <div class="div-buttons">
        <form id="form-cad" action="/frontend/views/categoria/editarCategoria.php" method="POST">
            <a href="/categorias/cadastro" class="button">cadastrar</a>
        </form>
        <form id="form-del" action="/frontend/views/categoria/editarCategoria.php" method="POST">
            <button class="button">deletar</button>
        </form>
    </div>

    <label class="label-selecionar" for="">selecionar todos<input type="checkbox"></label>
    <div class="div-btns">
        <?php
        $j = 0;
        for ($i = 0; $i < count_register(); $i++) {
        $j++;
        ?>
            <div class="div-div-inputs">

                <form id="form-btn" action="/frontend/views/categoria/editarCategoria.php" method="POST">
                    <label for="botao">
                        <input type="hidden" name='id' value='<?php echo id($j) ?>'>
                        <input type="hidden" name='id_seq' value='<?php echo $j ?>'>
                        <input name="botao" type='submit' class='link' value='<?php echo read($j) ?>'>
                    </label>
                </form>

                <br>
            </div>
        <?php }; ?>
    </div>
    <p><span style="color:red">clique</span> para atualizar ou ver sub categorias</p>
</main>