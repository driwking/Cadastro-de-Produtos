<?php
require_once 'connect.db.php';

function clear($input)
{
    global $connect;
    $mysql = mysqli_escape_string($connect, $input);
    $html = htmlspecialchars($mysql);
    return $html;
}

function verificacao(String $nome)
{

    global  $connect;
    $sql = "SELECT * FROM categorias WHERE nome_principal = '$nome'";
    $query = mysqli_query($connect, $sql);

    return mysqli_num_rows($query);
}

function count_register()
{
    global $connect;
    $sql = "SELECT id FROM categorias";
    $query = mysqli_query($connect, $sql);

    return mysqli_num_rows($query);
}
function create(String $nome_prim, String | Null $nome_seg, String | Null $nome_terc)
{

    global $connect;
    $sql = "INSERT INTO categorias (nome_principal,nome_segundario,nome_terciario) VALUES ('$nome_prim','$nome_seg','$nome_terc')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        return "cadastrado";
    } else {
        return "erro";
    }
}

function read()
{

    global $connect;
    $row = [];
    $sql = "SELECT nome_principal FROM categorias";
    $query = mysqli_query($connect, $sql);
    for ($i = 0; mysqli_num_rows($query) < $i; $i++) {
        $row = mysqli_fetch_array($query, MYSQLI_BOTH);
        $list[$i] = $row['nome_principal'];
        print_r($list);
    }
    
}


function id(int $id)
{

    global $connect;
    $sql = 'SELECT id FROM categorias WHERE id = ' . $id;
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query, MYSQLI_BOTH);
    print_r($row);
    return $row['id'];
}

// $sql = "SELECT nome_principal FROM categorias ";
// $query = mysqli_query($connect, $sql);
// for($i = 0; mysqli_num_rows($query) > $i; $i++){

//     $row = mysqli_fetch_array($query, MYSQLI_BOTH);
//     $list[$i] = $row['id'];
//     print_r($list);
// }


read();
// print_r($row);
