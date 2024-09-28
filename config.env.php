<?php
// envolviment variables

require("class/autoload.class.php");
// database
define("HOST","localhost");
define("DRIVE","mysql");
define("USER","u878351665_driw");
define("PASS","qT2;RC*&#");
define("DB","u878351665_pizzas");

// site
define("HOME","https://temp.driw.space");
define("PATH_S", HOME . "/");
define("PATH", "/");
define("FRONT_S", PATH_S . "frontend/");
define("ASSETS_S", PATH_S . "frontend/public/");
define("ASSETS", PATH . "frontend/public/");
define("IMG_S", "frontend/public/img/");
define("IMG", PATH_S . "frontend/public/img/");
define("VIEWS", "frontend/views");
define("VIEWS_S", PATH_S . "frontend/views");
define("COMPONENTS", "frontend/components/");
define("CONTROLLER", "frontend/controller/js/");
define("NOT_PAGES", [
    "404",
    "/404"
]);

define("DADOS", [
    
]);

$SEO = new SEO(Title: "Cinefantasy Events",Nome: "Cinefantasy Events");
// (new Tables())->recreateTables();