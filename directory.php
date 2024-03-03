<?php
session_destroy();
session_start();
 
$path = '/Users/andri/Documents/trabalhos/sistema_ERP_pizzaria_jacinthos/Cadastro-de-Produtos/frontend/';
$crud = '/Users/andri/Documents/trabalhos/sistema_ERP_pizzaria_jacinthos/Cadastro-de-Produtos/backend/';

$_SESSION['layouts'] = $path . 'layouts/';
$_SESSION['layouts-css'] = $path . 'layouts/css/';
$_SESSION['title'] = $path;
$_SESSION['dir'] = $path;

$_SESSION['crud'] = $crud . '/clear.php';
$_SESSION['conexion'] = $crud . '/connect.db.php';

header("location: /");