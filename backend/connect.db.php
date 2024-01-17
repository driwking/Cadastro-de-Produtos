<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "pizzas";
$port = 3306;

$connect = mysqli_connect($hostname,$username,$password,$db_name,$port);


if(mysqli_connect_error()){
    
    echo "erro na conexão: ".mysqli_connect_error();

}else{

    echo "<script> console.log('conexão ok')</script>";

}



?>
