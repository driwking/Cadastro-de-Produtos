<?php
// session_destroy();
session_start();


$path = '/xampp/htdocs/php/Cadastro-de-Produtos/frontend/';
$crud = '/xampp/htdocs/php/Cadastro-de-Produtos/backend/';

$_SESSION['layouts'] = $path . 'layouts/';
$_SESSION['layouts-css'] = $path . 'layouts/css/';
$_SESSION['title'] = $path;
$_SESSION['dir'] = $path;

$_SESSION['crud'] = $crud . '/clear.php';
$_SESSION['conexion'] = $crud . '/connect.db.php';


