<?php
require "backend/utils/functions.php";
require "config.env.php";
require "functions/routes.php";
$URL = get_url();
$dates = new Adicionais();

// var_dump($URL[0]);
if($URL[0] == 'api' || $URL[0] == '/api'){
    header("location: email.php");
} else {
ob_start();

if (!in_array(($URL[0] == 'index' ? 'home' : $URL[0]),NOT_PAGES)) {
    component("menu", ['URL' => $URL]);
}


if ($URL[0] == "index") {
    require VIEWS . "/home" . "/" . $URL[0] . ".php";
} else  if (is_dir(VIEWS . "/" . $URL[0])) {
    if (file_exists(VIEWS  . "/" . $URL[0] . "/" . $URL[1] . ".php")) {
        require VIEWS  . "/" . $URL[0] . "/" . $URL[1] . ".php";
    }else{
        if($URL[0] == 'api' | $URL[0] == '/api'){
            header("location: email.php");
        }
        load_css(VIEWS_S . "/404/404");
        require VIEWS . "/404/404.html";
    }
} else if (file_exists(VIEWS . $URL[0] . ".php")) {
    require VIEWS . "/" . $URL[0] . ".php";
}
 else {
    header("location: /404");
}

if (!in_array(($URL[0] == 'index' ? 'home' : $URL[0]),NOT_PAGES)) {
    component("footer");
}

load_css(ASSETS_S . "css/boot");
load_css(ASSETS_S . "fonts/raleway/stylesheet");
load_css(ASSETS_S . "fonts/montserrat/stylesheet");

$body_html = ob_get_clean();
require "index.html.php";
}