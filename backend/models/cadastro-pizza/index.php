<?php
require_once "/Users/andri/Documents/trabalhos/sistema_ERP_pizzaria_jacinthos/Cadastro-de-Produtos/backend/clear.php";

$dados = $_POST;
// print_r($dados);
// echo "<br> ";
$arr = [];
$sub = [];
$i = 1;

foreach ($dados as $campo => $dado) {

    if (strstr($campo, "sub-0")) {
        $arr[$campo] = $dado;
    }
}

array_push($sub, $arr);
print_r($sub);
// for ($i = 0; $i < count($sub); $i++) {
    
//     if (strstr($sub[$i], "sub-0$i")) {
//         // $arr[$campo] = $dado;
//         print("");
//     }
// }



// foreach ($dados as $campo => $dado) {


//     $str = "sub-0$i";
//     if (strstr($campo, $str)) {

//         $division = explode("-", $campo);
//         // print("tes<br>");
//         if ($division[1] == "0$i") {
//             $arr[$campo] = $dado;
//             array_push($sub, $arr);
//             unset($arr);
//             $arr = [];
//         } else {
//             continue;
//         }
//         $i < count($dados) ? $i = $i + 1 : count($dados);

//     }
// }

array_push($sub, $arr);


// for ($j = 0; $j < 2; $j++) {
// }
// print_r($sub);


// $campo = [];

// for($i = 0 ; $i < count($_POST); $i++){

//     if(isset($_POST[$i])){
//         if($i == 1 or $i == 2){

//             $k = 1;        
//             $campo[$k][$i]= clear($_POST[$i]);

//         }

//         if($i != 1 and $i != 2){
//             $campo[$i] = clear($_POST[$i]);
//         }

//     }
// }   

// var_dump($campo);

// if(!verificacao($campo[0]) > 0){

//     create($campo[0],$campo[1]);
//     echo 'Produto cadastrado com sucesso';

// }else{

//     echo 'Produto já cadastrado';
// }
