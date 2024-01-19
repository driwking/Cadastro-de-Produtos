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

function read(int $i)
{

    global $connect;
    $row = [];
    $list = [];
    $sql = "SELECT nome_principal FROM categorias";
    $query = mysqli_query($connect, $sql);
    $k = 0;
    for ($j = 0; mysqli_num_rows($query) > $j; $j++) {
        $k++;
        $row = mysqli_fetch_array($query, MYSQLI_BOTH);
        $list[$k] = $row['nome_principal'];
    }
    return $list[$i];
}


function id(int $id)
{

    global $connect;
    $row = [];
    $list = [];
    $sql = 'SELECT id FROM categorias';
    $query = mysqli_query($connect, $sql);
    $k = 0;
    for ($j = 0; mysqli_num_rows($query) > $j; $j++) {
        $k++;
        $row = mysqli_fetch_array($query, MYSQLI_BOTH);
        $list[$k] = $row['id'];
    }
    return $list[$id];
}

function names_complet($id){

    global $connect;
    $sql = 'SELECT nome_segundario, nome_terciario FROM categorias WHERE id ='.$id;
    $row = [];
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query, MYSQLI_BOTH);

    return $row;
}

// echo id(4);
//echo names_complet(4)[0];