<?php

require_once 'connect.db.php';

$sql = "SELECT * FROM pizzas";
$result = mysqli_query($connect,$sql);
// $contents='BINARY IMAGE DATA';



if(mysqli_num_rows($result) > 0){

while($dados = mysqli_fetch_array($result)):

    
    echo $dados['nome']." ///  ";
    echo $dados['descricao'].'<br>';
    echo '<img src = "data:image/png;base64,' . base64_encode($dados['imagem']) . '" width = "200px" height = "200px"/>'.'<br>';

endwhile;
}


?>