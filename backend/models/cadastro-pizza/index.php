<?php
require_once "/Users/andri/Documents/trabalhos/sistema_ERP_pizzaria_jacinthos/Cadastro-de-Produtos/backend/clear.php";

$campo = [];

for($i = 0 ; $i < count($_POST); $i++){
    
    if(isset($_POST[$i])){
        if($i == 1 or $i == 2){

            $k = 1;        
            $campo[$k][$i]= clear($_POST[$i]);
                 
        }

        if($i != 1 and $i != 2){
            $campo[$i] = clear($_POST[$i]);
        }

    }
}   

var_dump($campo);

if(!verificacao($campo[0]) > 0){

    create($campo[0],$campo[1]);
    echo 'Produto cadastrado com sucesso';

}else{

    echo 'Produto já cadastrado';
}



?>
