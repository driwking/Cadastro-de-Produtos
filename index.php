<?php

$url = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => '/frontend/views/cadastro-produto/',
    '/produtos' => '/frontend/views/cadastro-produto/cadastro.php',
];

foreach($routes as $indice => $valor){
    if($url == $indice){
        header('location:'. $valor);
    }
}

?>