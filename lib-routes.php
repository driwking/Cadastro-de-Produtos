<?php
$tex = 0;
$url = $_SERVER['REQUEST_URI'];
$routes = array();
function insertContent(string $file){

    $arquivo = file('header.php');

    for($i = 0; !empty($arquivo[$i]) ;$i++) {
        fwrite(fopen($file,'a'),$arquivo[$i])."\n";
    }
}

function createFile(string|null $name = null, string $dir): string
{
    $dir = 'frontend/views/' . $dir . '/';

    if (!file_exists($dir . $name)) {
        if ($name != null && $name != '' && !empty($name)) {
            $padrao = '/^[a-z\-\0-9]+(.php|.html)$/i';

            if (preg_match($padrao, $name)) {
                $file = fopen($dir . $name, 'a');
                insertContent($dir.$name);
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
function makeDir(string|null $name = null): bool
{
    $dirName = __DIR__ . '\\frontend\\views\\' . $name;

    if (file_exists($dirName)) {
        return true;
    } else {
        return mkdir($dirName, 777);
    }
}
function route(string $req, string|null $dir = null, string|null $arq = null)
{
    global $routes, $url;
    $routes[$req] = "\\frontend\\views\\" . $dir . '\\' . $arq;

    if ($req == $url) {
        foreach ($routes as $indice => $value) {
            if ($indice == $req) {

                if (makeDir($dir)) {
                    createFile($arq, $dir);
                }
                
            }
            elseif ($url != $req) {
        
                return 'request_url =' . $req . '<br>' . 'diretorio = ' . $dir . '<br>' . 'URL = ' . $url . '<br>' . 'arquivo = ' . $arq . '<br>';
            }
        }
    }
}


foreach ($routes as $indice => $value) {
    if ($indice == $url) {
        header('location:' . $value);
        break;
    } else {
        $tex += 1;
    }
}

if($tex == count($routes)){
   header('location: index.html');
}

?>