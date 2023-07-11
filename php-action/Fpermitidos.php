<?php
require_once 'connect.db.php';
require_once 'post.php';


$extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
$arquivoFinal = $nome.'.'.(formatos($extensao));
move_uploaded_file($_FILES['imagem']['tmp_name'],'arquivos/'.$arquivoFinal);
$arquivoAberto = fopen('arquivos/'.$arquivoFinal, 'r');
$tamanho = filesize('arquivos/'.$arquivoFinal);
$img = img($arquivoAberto,$tamanho);

    function formatos($extensao){
        
        $permitidos = ['png','jpg','jpeg'];
         
        if(in_array($extensao, $permitidos)){
            
            return $extensao;
            
        }else{
            return "fomato inválido";
        }
    
    }

    function img($arquivoAberto, $tamanho){

        global $connect;
        $img = addslashes(fread($arquivoAberto,$tamanho));
        return $img;

    }


?>