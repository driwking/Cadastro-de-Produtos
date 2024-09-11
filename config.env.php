<?php
// envolviment variables

require("class/autoload.class.php");
// database
define("HOST","localhost");
define("DRIVE","mysql");
define("USER","root");
define("PASS","");
define("DB","pizzas");

// site
define("HOME","http://localhost");
define("PATH_S", HOME . "/");
define("PATH", "/");
define("ASSETS_S", PATH_S . "frontend/public/");
define("ASSETS", PATH . "frontend/public/");
define("IMG_S", PATH_S . "frontend/public/img/");
define("IMG", PATH . "frontend/public/img/");
define("VIEWS", "frontend/views");
define("COMPONENTS", "frontend/components/");

define("DADOS", [
    
]);

new SEO("Pizzaria jacinthos");
// (new Tables())->recreateTables();