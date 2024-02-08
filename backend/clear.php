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
    $sql = "SELECT * FROM categorias WHERE nome = '$nome'";
    $query = mysqli_query($connect, $sql);

    return mysqli_num_rows($query);
}

function count_register()
{
    global $connect;
    $sql = "SELECT id_categorias FROM categorias";
    $query = mysqli_query($connect, $sql);

    return mysqli_num_rows($query);
}
function create(String $nome_cat, array $nome_cat_segundaria)
{
    global $connect;
    
    $sql = "INSERT INTO categorias (nome) VALUES ('$nome_cat')";
    $query = mysqli_query($connect, $sql);
    
    $sql = "SELECT id_categorias FROM categorias WHERE nome = '$nome_cat'";
    $id = mysqli_query($connect, $sql);
    $id = mysqli_fetch_array($id, MYSQLI_BOTH);

    $arr_values = count($nome_cat_segundaria);
    for($i = 1; $i <=  $arr_values; $i++ ){
        $sql_cat_segundaria = "INSERT INTO categorias_segundarias (nome, id_categorias) VALUES ('$nome_cat_segundaria[$i]', $id[0])";
        $query = mysqli_query($connect, $sql_cat_segundaria);
    }
    
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
    $sql = "SELECT nome FROM categorias";
    $query = mysqli_query($connect, $sql);
    $k = 0;
    for ($j = 0; mysqli_num_rows($query) > $j; $j++) {
        $k++;
        $row = mysqli_fetch_array($query, MYSQLI_BOTH);
        $list[$k] = $row['nome'];
    }
    return $list[$i];
}


function id(int $id)
{

    global $connect;
    $row = [];
    $list = [];
    $sql = 'SELECT id_categorias FROM categorias';
    $query = mysqli_query($connect, $sql);
    $k = 0;
    for ($j = 0; mysqli_num_rows($query) > $j; $j++) {
        $k++;
        $row = mysqli_fetch_array($query, MYSQLI_BOTH);
        $list[$k] = $row['id_categorias'];
    }
    return $list[$id];
}

function names_complet($id){

    global $connect;
    $sql = 'SELECT cat.nome, catSeg.nome FROM categorias_segundarias AS catSeg RIGHT JOIN categorias AS cat ON cat.id_categorias = catSeg.id_categorias WHERE cat.id_categorias ='.$id;
    $row = [];
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query, MYSQLI_BOTH);

    return $row;
}

// echo id(4);
// var_dump(names_complet(1));

// $arr[] = 'teste';
// $arr[] = 'dois';
// var_dump($arr);
// var_dump(create('LOLLL',$arr));
// global $connect;
// $sql = "SELECT id_categorias FROM categorias WHERE nome = 'tradicional'";
// $query = mysqli_query($connect, $sql);
// $res = mysqli_fetch_array($query, MYSQLI_BOTH);
// var_dump($res[0]);
