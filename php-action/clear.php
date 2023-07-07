<?php

require_once 'C:\xampp\htdocs\php\Cadastro-de-Produtos\php-action\connect.db.php';

function clear($input){
    global $connect;
    $mysql = mysqli_escape_string($connect,$input);
    $html = htmlspecialchars($mysql);
    return $html;
}


?>