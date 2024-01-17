<?php
require_once "/xampp/htdocs/php/Cadastro-de-Produtos/backend/clear.php";

$campo = [];

for($i = 0 ; $i < count($_POST); $i++){
    
    if(isset($_POST[$i])){
       $campo[$i] = clear($_POST[$i]);
    }
}   
;
if(!verificacao($campo[0]) > 0){

    create($campo[0],$campo[1],$campo[2]);
    echo 'Produto cadastrado com sucesso';

}else{

    echo 'Produto já cadastrado';
}



?>
