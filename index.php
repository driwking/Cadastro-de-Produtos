<?php
require "config.env.php";
require "functions/routes.php";
$URL = get_url();


$dates = new Adicionais();
// $dates->setVal("Teste","descricao teste" , 35.33);
// var_dump($dates);
// $dates->createEntitis();
echo "<pre>";
// var_dump($dates->readEntitisAll());
// $dates->deleteEntitis();
echo "<br>";
// var_dump($dates->readEntitis());
echo "</pre>";
require "index.html.php";