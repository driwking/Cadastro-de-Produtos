<?php

$url = $_SERVER['REQUEST_URI'];

$routes = array();



function route(string $req, string|null $dir, string|null $arq)
{   
    global $routes, $url;

    if($req == $url){
        
        $routes[$req] = "/frontend/views/".$dir.'/'.$arq;
        foreach($routes as $indice => $value){
            if($indice == $req){
                return header('location: '.$value);
            }
        }
        
        
    }elseif($url){
        echo 'url ='.$req.'<br>'.'diretorio = '.$dir.'<br>'.'REQUEST_URL = '.$_SERVER['REQUEST_URI'].'<br>'.'arquivo = '.$arq.'<br>';
    }
}

route('/vendas' , 'vendas', 'index.php');
route('/','cadastro-produto','');
route('/produtos','cadastro-produto','cadastro.php');
route('/clientes','vendas/clientes','menuClientes.php');

?>