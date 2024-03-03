<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/frontend/public/img/logo.png" type="image/x-icon">
    <title>component mesnage</title>
    <link rel="stylesheet" href="./css/mensage.css">
</head>

<body>

    <form action="./req.php" method="post" class="dados">

    </form>
    <div>
        <div class="mensage-btn">
            <div class="div-btns">
                <div onclick="teste()" name="conf" type="submit" class="btn" placeholder="enviar" value="enviar">
                    <p>enviar</p>
                </div>
            </div>
            <div class="div-backgorund">
            </div>
        </div>
    </div>
    <div class="bots">
        <h3 class="title-h3">
            Deseja confirma a atualização dos campos de categoria ?
        </h3>
        <button onclick="teste()"></button>
        <button onclick="conf()" name="conf" type="submit" class="btn_conf" value="confirmar">confirmar</button>
        <div onclick="canc()" name="conf" class="btn_canc" value="confirmar">
            <p>cancelar</p>
        </div>
    </div>
    <script src="./js/index.js"></script>
</body>

</html>