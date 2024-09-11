<main>
    <h1>EDITAR CATEGORIA</h1>
    <form action="../categoria/edit.php" method="POST" class="form-dados">
        <h2>PRINCIPAL</h2>
        <input type="text" id="input-1" placeholder="input-1" value="<?php echo read($id_seq) ?>">
        <div class="div-buttons mensage-btn">
            <a class="button btn-1" href="/categorias">voltar ao menu</a>
            <!-- <button class="button btn-2">atualizar</button> -->
            <div class="div-btns button btn-2"> <!--- div-btns--->
                <div onclick="send_mensage()" name="conf" type="submit" class="btn" placeholder="enviar" value="enviar">
                    <p>enviar</p>
                </div>
            </div>
        </div>
        <div class="div-titulos">
            <h2>SEGUNDARIAS</h2>
            <h2>TAMANHOS</h2>
            <h2>VALORES</h2>
        </div>
        <div class="div-inputs">

            <input type="text" name="nome_primario" placeholder="input-2" value="<?php echo names_complet($id)[0] ?>">
            <input type="text" name="nome_segundario" placeholder="input-3" value="<?php echo names_complet($id)[1] ?>">
            <input type="text" name="nome_terciario" placeholder="input-4">
        </div>
        <div class="button btn-3">novo</div>
        <h3><span style="color:red">clique</span> para atualizar ou deletar</h3>

    </form>
    <div class="contaienr-bot"> <!--- bots--->
        <div class="main-bot"> <!--- divs-btns--->
            <h3 class="title-h3">
                Deseja confirma a atualização dos campos de categoria ?
            </h3>
            <button onclick="conf()" name="conf" type="submit" class="btn_conf" value="confirmar">confirmar</button>
            <div onclick="canc()" name="conf" class="btn_canc" value="confirmar">
                <p>cancelar</p>
            </div>
        </div>
    </div>
    <script src="./js/index.js"></script>
</main>