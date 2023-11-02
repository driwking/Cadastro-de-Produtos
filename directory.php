<?php 
session_start();
// session_destroy();

$path = '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/';

$_SESSION['layouts'] = $path.'layouts/';
$_SESSION['layouts-css'] = $path.'layouts/css/';
$_SESSION['title'] = $path;
$_SESSION['dir'] = $path;


?>