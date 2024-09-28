<?php

$var = filter_input_array(INPUT_POST, FILTER_DEFAULT);
header("Content-Type: application/json");
json_encode($var);
// var_dump($_POST);


?>