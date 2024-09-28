<main>
    <h1>EDITAR PIZZA</h1>

    <form action="">
        <div class="div-categorias">
            <ul>
                <li>
                    <label for="">NOME</label><input type="text" placeholder="xxxxx"></label>
                </li>
                <li>
                    <label for="">CATEGORIA PRINCIPAL</label>
                    <select type="text">
                        <option value="selecione">selecione</option>
                    </select>
                </li>
                <li>
                    <label for="">CATEGORIA SEGUNDARIA</label>
                    <select type="text" placeholder="selecione">
                        <option value="selecione">selecione</option>
                    </select>
                </li>
            </ul>
        </div>
        <div class="div-descricao">
            <label for="">DESCRIÇÃO</label>
            <textarea name="" id="" cols="30" rows="10" placeholder="xxxxx"></textarea>
        </div>
        <div class="div-imagem">
            <label for="">IMAGEM</label>
            <label for="img" class="label-input" id="lb-input">
                <button>X</button>
            </label>
            <input type="file" name="img" id="img">
        </div>
        <div class="div-buttons">
            <a href="">voltar ao cardapio</a>
            <button>cadastrar</button>
        </div>
    </form>
    <script src="./javascript/img.js"></script>

</main>