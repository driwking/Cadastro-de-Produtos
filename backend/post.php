<?php
// conexão datbase

require_once 'connect.db.php';
require_once 'clear.php';


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

    global $nome,$categoria, $connect;
    $sql = "SELECT * FROM `pizzas` WHERE `nome` = '$nome'";
    $query = mysqli_query($connect, $sql);

    if(mysqli_num_rows($query)>0){
        return true;
    }else{
        return false;
    }

}

if(Isset($_POST['btn-enviar']) && !empty($_POST['nome']) && !empty($_POST['categoria']) && !empty($_POST['venda']) && !empty($_POST['custo']) && !empty($_POST['descricao']) ){

    $nome = clear($_POST['nome']);
    $categoria = clear($_POST['categoria']);
    $venda = floatval(clear($_POST['venda']));
    $custo = clear($_POST['custo']);
    $descricao = clear($_POST['descricao']);
    require_once 'Fpermitidos.php';
    

    print_r($_POST);    
    
    // Cadastro 
    if(verificacao() == true){
        echo "produto já cadastrado";
    }else{
        $sql = "INSERT INTO `pizzas`(`nome`, `categoria`, `venda`, `custo`, `descricao`,`imagem`) VALUES ('$nome','$categoria',$venda,$custo,'$descricao','$img')";
        Cadastro($sql);
        echo "cadastrado";
    }

    
        unlink('arquivos/'.$arquivoFinal);
    

    header('location: /frontend/views/cadastro-produto/cadastro.php');
        
}else{
    header('location: /frontend/views/cadastro-produto/cadastro.php');
}



?>

