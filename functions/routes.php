<?php

$url = $_SERVER['REQUEST_URI'];
$URL = $url == "/" ? 'index' : explode("/", $url);

$routes = array();

function get_url()
{
    $REQ = $_SERVER['REQUEST_URI'];
    $URL[0] = preg_match("%^(\/)$%", $REQ) ? preg_replace("%^(\/)%", 'index', $REQ) : preg_replace("%^(\/)%", '', $REQ, 0);

    if ($URL[0] == 'index' || count(explode("/", $URL[0])) == 2) $URL[1] = 'index';
    else {
        if (explode("/", $URL[0])) $URL[1] = explode("/", $URL[0])[2];
        $URL[0] = explode("/", $URL[0])[1];
    }
    return $URL;
}
function component(string $name____ = '', array $dates____ = [])
{
    foreach ($dates____ as $date => $value) {
        $$date = $value;
    }
    $path____ = COMPONENTS . "{$name____}.component";
    $file____ = "{$path____}/render.component.phtml";
    if (!is_dir($path____)) {
        throw new Exception("Component no exists");
    };
    if (file_exists($file____)) {
        require $file____;
        if (file_exists($path____ . "/render.component.css")) {
            load_css($path____ . "/render.component");
        }
        if (file_exists($path____ . "/render.component.js")) {
            load_js($path____ . "/render.component");
        }
    }
}
