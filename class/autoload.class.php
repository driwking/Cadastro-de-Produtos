<?php

if(function_exists("__autoloadClass")){
};
$__autoloadClass = function($class){
    $file = $class . ".class.php";
    if (file_exists("class/" . $file)) require "class/" . $file;
    else if (file_exists("class/models/DB/" . $file )) require "class/models/DB/" . $file;
    else if (file_exists("class/entitys/" . $file )) require "class/entitys/" . $file;
    else if (file_exists("class/models/" . $file )) require "class/models/" . $file;
    else if (file_exists("class/models/tables/" . $file)) require "class/models/tables/" . $file;
    else if (file_exists("class/models/errors/" . $file)) require "class/models/errors/" . $file;

    else throw new Exception("{$file} não foi encontrado");
};
spl_autoload_register($__autoloadClass);

?>