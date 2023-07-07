<?php
// conexão datbase

require_once 'C:\xampp\htdocs\php\Cadastro-de-Produtos\php-action\connect.db.php';
require_once 'C:\xampp\htdocs\php\Cadastro-de-Produtos\php-action\clear.php';


function Cadastro($sql){
    global $connect;
    $query = mysqli_query($connect,$sql);
    if($query){
        return "cadastrado";
    }else{
        return "erro";
    }
}

function verificacao(){

    global $nome,$categoria;
    $sql = "SELECT * FROM `pizzas` WHERE `nome` = '$nome'";
    global $connect;
    $query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($query)>0){
        return false;
    }else{
        return true;
    }

}

if(Isset($_POST['btn-enviar'])){

    // $imagem = clear($_POST['imgaem']);
    $nome = clear($_POST['nome']);
    $categoria = clear($_POST['categoria']);
    $venda = clear($_POST['venda']);
    $custo = clear($_POST['custo']);
    $descricao = clear($_POST['descricao']);
    
    

    // Cadastro 
    if(verificacao()){
        echo "produto já cadastrado";
    }else{
        
        $sql = "INSERT INTO `pizzas`(`nome`, `categoria`, `venda`, `custo`, `descricao`) VALUES ('$nome','$categoria','$venda','$custo','$descricao')";
        Cadastro($sql);
        echo "cadastrado";
    }
    

    
}



?>