<?php

$url = $_SERVER['REQUEST_URI'];

$routes = array();

function makeDir(string|null $name = null)
{
    echo $dirName = __DIR__ . '\\frontend\\views\\' . $name;
    echo '<br>';

    if (file_exists($dirName)) {
        return true;
    } else {
        return mkdir($dirName, 777);
    }
}

function createFile(string|null $name = null, string $dir)
{
    $dir = 'frontend/views/' . $dir . '/';
    echo "<hr>";
    if (!file_exists($dir . $name)) {
        if ($name != null && $name != '' && !empty($name)) {

            $padrao = '/^[a-z\-\0-9]+(.php|.html)$/i';
            if (preg_match($padrao, $name)) {
                $file = fopen($dir . $name, 'a');
            } else {
                $file = false;
            }

            if (($file == true)) {
                return 'aquivo criado';
            } else {
                return 'insira extensão valida';
            };
        }
    } else {
        return "arquivo ja existente";
    }
}


function route(string $req, string|null $dir = null, string|null $arq = null)
{
    global $routes, $url;

    if ($req == $url) {

        $routes[$req] = "\\frontend\\views\\" . $dir . '\\' . $arq;
        foreach ($routes as $indice => $value) {
            if ($indice == $req) {

                if (makeDir($dir)) {
                    createFile($arq, $dir) . '<br>';
                }
                return header('location: ' . $value);
            }
        }
    } elseif ($url) {
        return 'url =' . $req . '<br>' . 'diretorio = ' . $dir . '<br>' . 'REQUEST_URL = ' . $_SERVER['REQUEST_URI'] . '<br>' . 'arquivo = ' . $arq . '<br>';
    }
}

route('/', 'cadastro-produto', '');
route('/categorias', 'categoria', '');
route('/cadastro/categoria', 'categoria', 'cadastroCategoria.php');
route('/editar-categoria', 'categoria', 'editarCategoria.php');
route('/pizzas', 'Pizzas', 'index.php');
route('/editar-pizza','Pizzas','editarPizza.php');
route('/produtos', 'cadastro-produto', 'cadastro.php');
route('/clientes', 'vendas/clientes', 'menuClientes.php');
route('/vendas', 'vendas', 'index.php');
